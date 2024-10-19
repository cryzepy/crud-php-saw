<?php
include "./db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Custom-Header");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $query = "SELECT * FROM crud_user";
    $result = $conn->query($query);

    $users = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    http_response_code(200);
    echo json_encode(["message" => "sukses mengambil data dari server", "data" => $users]);

    $conn->close();

}
?>