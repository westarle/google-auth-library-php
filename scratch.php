<?php
require 'vendor/autoload.php';
use Google\Auth\Credentials\ServiceAccountCredentials;
$json = [
    'private_key' => '-----BEGIN PRIVATE KEY----- invalid -----END PRIVATE KEY-----',
    'client_email' => 'foo@bar.com',
    'type' => 'service_account',
];
try {
    $sa = new ServiceAccountCredentials('scope/1', $json);
    $sa->fetchAuthToken();
    echo "NO_ERROR";
} catch (\Exception $e) {
    echo "CAUGHT_EXCEPTION: " . get_class($e) . " - " . $e->getMessage();
} catch (\Error $e) {
    echo "CAUGHT_ERROR: " . get_class($e) . " - " . $e->getMessage();
}
