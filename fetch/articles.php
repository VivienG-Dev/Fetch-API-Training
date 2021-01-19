<?php
// Create Connection
$conn = mysqli_connect('localhost', 'root', 'root', 'ajaxtest');

$query = 'SELECT * FROM articles';

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($articles);