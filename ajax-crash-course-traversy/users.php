<?php

// Create Connection
$conn = mysqli_connect('localhost', 'root', '12345', 'ajaxtest');

$query = 'SELECT * FROM users';

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Takes our result, assoc array, and put it into json format when it gives us a response
echo json_encode($users);