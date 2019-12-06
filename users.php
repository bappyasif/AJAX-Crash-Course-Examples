<?php

$db_conn = mysqli_connect("localhost", "root", "", "learning_ajax");

$query = 'SELECT * FROM users';

// Get Results
$query_result = mysqli_query($db_conn, $query);

// Fetch Data
$users = mysqli_fetch_all($query_result, MYSQLI_ASSOC);

echo json_encode($users);