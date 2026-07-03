<?php

// Set up Vercel-specific environment
if (!getenv('APP_ENV')) {
    $_ENV['APP_ENV'] = 'production';
}

// Ensure storage paths are writable
$storagePath = __DIR__ . '/../storage';
if (!is_dir($storagePath)) {
    mkdir($storagePath, 0777, true);
}

// Set cache/session to use temporary storage
if (!getenv('CACHE_DRIVER')) {
    $_ENV['CACHE_DRIVER'] = 'array';
}
if (!getenv('SESSION_DRIVER')) {
    $_ENV['SESSION_DRIVER'] = 'cookie';
}

try {
    require __DIR__ . '/../public/index.php';
} catch (Exception $e) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode([
        'error' => 'Internal Server Error',
        'message' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine()
    ]);
}
