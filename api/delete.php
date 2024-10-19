<?php
include "./db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Custom-Header");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'];


    $query = "DELETE FROM crud_user WHERE id =\"$id\"";
    $result = $conn->query($query);

    if($result !== false && $conn->affected_rows > 0) {
        http_response_code(200);
        echo json_encode(["message" => "sukses menghapus user"]);
    }else{
        http_response_code(404);
        echo json_encode(["message" => "gagal menghapus user"]);
    }
    
    $conn->close();
}
?>