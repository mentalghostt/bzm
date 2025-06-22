<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    exit('Only POST requests are allowed');
}

$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
if (empty($phone)) {
    header('HTTP/1.1 400 Bad Request');
    exit('Phone number is required');
}

$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$date = date('Y-m-d H:i:s');
$logData = "[$date] IP: $ip | Phone: $phone\n";

$logFile = $_SERVER['DOCUMENT_ROOT'] . '/phone_numbers.log';

try {
    $written = file_put_contents($logFile, $logData, FILE_APPEND | LOCK_EX);
    if ($written === false) {
        throw new Exception('Failed to write to file');
    }
    
    $filePerms = fileperms($logFile);
    $filePermsStr = substr(sprintf('%o', $filePerms), -4);
    
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success',
        'message' => 'Data saved successfully',
        'debug' => [
            'file_path' => $logFile,
            'file_permissions' => $filePermsStr,
            'bytes_written' => $written
        ]
    ]);
    
} catch (Exception $e) {
    header('HTTP/1.1 500 Internal Server Error');
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage(),
        'debug' => [
            'file_path' => $logFile,
            'file_exists' => file_exists($logFile),
            'is_writable' => is_writable($logFile),
            'directory_writable' => is_writable(dirname($logFile))
        ]
    ]);
}