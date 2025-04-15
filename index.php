<?php

echo("<h1>Dockerized world</h1>");
// if (file_exists('/secrets/db_constants.php')) {
//     require_once '/secrets/db_constants.php';
// }

// defined('SENTRIFUGO_PASSWORD') || define('SENTRIFUGO_PASSWORD', trim(file_get_contents(getenv('DB_PASSWORD_FILE'))));
// defined('SENTRIFUGO_USERNAME') || define('SENTRIFUGO_USERNAME', trim(file_get_contents(getenv('DB_USER_FILE'))));


// echo "Testing Docker Secrets:\n";
// echo "DB User: " . SENTRIFUGO_USERNAME . "\n";
// echo "DB Password: " . (!empty(SENTRIFUGO_PASSWORD) ? '***REDACTED***' : 'NOT FOUND') . "\n";

// $password_path = getenv('DB_PASSWORD_FILE');
// echo "\nDebug Info:\n";
// echo "Password file path: " . ($password_path ?: 'NOT SET') . "\n";
// echo "File exists: " . (file_exists($password_path) ? 'YES' : 'NO') . "\n";


// Read secrets from file paths passed via environment variables
try{
$db_user = file_get_contents(getenv('DB_USER_FILE'));
$db_pass = file_get_contents(getenv('DB_PASSWORD_FILE'));

echo "DB Username: " . htmlspecialchars(trim($db_user)) . "<br>";
echo "DB Password: " . htmlspecialchars(trim($db_pass)) . "<br>";
}catch(Exception $e){
    echo($e->getMessage());
}
?>