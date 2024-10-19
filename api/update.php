<?php
include "./db.php";
include "./read.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Custom-Header");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id_target = $_POST["id_target"];
    $new_name = $_POST["new_name"];


    $query = "UPDATE crud_user SET name=\"$new_name\" WHERE id = \"$id_target\"";

    if ($conn->query($query) === true && $conn->affected_rows > 0) {
        http_response_code(200);
        echo json_encode(["message" => "sukses mengubah user"]);
    } else {
        http_response_code(404);
        echo json_encode(["message" => "gagal mengubah user"]);
    }

    $conn->close();


}
?>

