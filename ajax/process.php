<?php

// Connect to a database
$conn = mysqli_connect('localhost', 'root', 'root', 'ajaxtest');

echo 'Processing...';

// Check for GET variable
if(isset($_GET['name']))
{
    // NOTE: this is not safe, it's just for learning basic AJAX
    echo 'GET: Your name is ' . $_GET['name'];
}

// Check for POST variable
// if(isset($_POST['name']))
// {
//     // NOTE: this is not safe, it's just for learning basic AJAX
//     echo 'POST: Your name is ' . $_POST['name'];
// }

// Check for POST variable with database
if(isset($_POST['name']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    //echo 'POST: Your name is ' . $_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($conn, $query))
    {
        echo 'Users Added...';
    } else 
    {
        echo 'ERROR: '. mysqli_error($conn);
    }
}