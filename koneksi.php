<?php
session_start();
// Membuat koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "decoypemweb");

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

function query($statement)
{
    global $conn;
    return mysqli_query($conn, $statement);
}

function fetch($statement)
{
    return mysqli_fetch_array($statement);
}

function rows($statement)
{
    return mysqli_num_rows($statement);
}

function myData($statement)
{
    return $_SESSION['pemwebsma'][$statement];
}
