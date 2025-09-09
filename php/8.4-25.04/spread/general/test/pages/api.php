<?php
header('Content-Type: application/json');

$data = [
    'status' => 'success',
    'message' => 'This is a JSON response',
    'timestamp' => time(),
];

echo json_encode($data);
?>
