<?php
include "./db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Custom-Header");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'];

    $query = "INSERT INTO crud_user (name) VALUES (\"$name\")";

    if ($conn->query($query) === true) {
        http_response_code(200);
        echo json_encode(["message" => "sukses menambahkan user"]);
    } else {
        http_response_code(500);
        echo json_encode(["message" => "gagal menambahkan user"]);
    }    
    $conn->close();
}
?>