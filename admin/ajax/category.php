<?php
header('Content-type:application/json');
include "../pages/includes/db.php";

$response = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $db = mysqli_query($connect, "insert into category(category_name) values('$_POST[category]')");
    if ($db) {
        $response['success'] = "Category Added Successfully";
    }else{
        $response['failed'] = "fail";

    }
    echo json_encode($response);
}
