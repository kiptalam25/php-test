<?php
require __DIR__.'/config/db_config.php';

// Your normal application code here...

// DEBUG OUTPUT - REMOVE THIS IN PRODUCTION!
echo '<div style="background:#f0f0f0; padding:10px; margin:20px; border:1px solid red;">';
echo '<strong>DEBUG OUTPUT (REMOVE IN PRODUCTION):</strong><br>';
echo 'DB_HOST: ' . htmlspecialchars(DB_HOST) . '<br>';
echo 'DB_USER: ' . htmlspecialchars(DB_USER) . '<br>';
echo 'DB_NAME: ' . htmlspecialchars(DB_NAME) . '<br>';
echo 'DB_PASS: ' . (defined('DB_PASS') ? '***REDACTED***' : 'undefined');
echo '</div>';
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
// try{
// $db_user = file_get_contents(getenv('DB_USER_FILE'));
// $db_pass = file_get_contents(getenv('DB_PASSWORD_FILE'));

// echo "DB Username: " . htmlspecialchars(trim($db_user)) . "<br>";
// echo "DB Password: " . htmlspecialchars(trim($db_pass)) . "<br>";
// }catch(Exception $e){
//     echo($e->getMessage());
// }
?>