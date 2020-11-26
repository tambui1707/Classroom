<?php
function openDB() {
    $conn = mysqli_connect("127.0.0.1","root","","database");
    return $conn;
}

function closeDB($conn) {
    $conn->close();
}
?>