<?php

// Connect to a database
$conn = mysqli_connect('localhost', 'root', 'root', 'ajaxtest');

// Check for POST variable with database
// if(isset($_POST['title']))
// {
//     $title = mysqli_real_escape_string($conn, $_POST['title']);
//     //echo 'POST: Your name is ' . $_POST['name'];

//     $query = "INSERT INTO articles(title) VALUES('$title')";

//     if(mysqli_query($conn, $query))
//     {
//         echo 'Title Added...';
//     } else 
//     {
//         echo 'ERROR: '. mysqli_error($conn);
//     }
// }

$title = mysqli_real_escape_string($conn, $_POST['title']);
$body = mysqli_real_escape_string($conn, $_POST['body']);

$query = "INSERT INTO `articles` (`id`, `title`, `body`) VALUES (NULL, '$title', '$body')";

if (mysqli_query($conn, $query)) {
    echo 'Title Added...';
} else {
    echo 'ERROR: ' . mysqli_error($conn);
}