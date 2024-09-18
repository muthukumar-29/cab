<?php
header('Content-type:application/json');
include "../pages/includes/db.php";

$response = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if ($_POST['action'] == 'add-category') {
        $db = mysqli_query($connect, "insert into category(category_name) values('$_POST[category]')");
        if ($db) {
            $response['success'] = "Category Added Successfully";
        } else {
            $response['failed'] = 'Category Insertion Fail...!';
        }

        echo json_encode($response);
    } elseif ($_POST['action'] == 'delete-category') {
        $id = $_POST['id'];

        $db = mysqli_query($connect, "delete from category where id='$id'");
        if ($db) {
            $response['success'] = "Category Deleted Successfully";
        } else {
            $response['failed'] = 'Category Deletion Failed...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'add-cabs') {
        $car_name = $_POST['car_name'];
        $car_no = $_POST['car_no'];
        $category_id = $_POST['category'];
        $seats = $_POST['seats'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $targetFile = "../uploads/car.svg";

        if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
            $target = '../uploads/';
            $file = $_FILES['image']['tmp_name'];
            $targetFile = $target . basename($_FILES['image']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }
        $result = mysqli_query($connect, "insert into cabs(car_name,car_number,category,seats,price,image,status) values('$car_name','$car_no','$category_id','$seats','$price','$targetFile','$status')");

        if ($result) {
            $response['success'] = 'Cab Added Successfully';
        } else {
            $response['failed'] = 'Cab Insertion Failed...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'delete-cabs') {
        $id = $_POST['id'];

        $result = mysqli_query($connect, "delete from cabs where id='$id'");
        if ($result) {
            $response['success'] = 'Cab Deleted Successfully';
        } else {
            $response['failed'] = 'Cab Deletion Failed...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'edit-cabs') {
        $id = $_POST['id'];

        $car_name = $_POST['car_name'];
        $car_no = $_POST['car_no'];
        $category_id = $_POST['category'];
        $seats = $_POST['seats'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $targetFile = $_POST['existing_image'];

        if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
            $target = '../uploads/';
            $file = $_FILES['image']['tmp_name'];
            $targetFile = $target . basename($_FILES['image']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }
        $result = mysqli_query($connect, "update cabs set car_name = '$car_name', car_number = '$car_no',category = '$category_id',seats='$seats',price='$price',image='$targetFile',status='$status' where id = '$id'");

        if ($result) {
            $response['success'] = 'Cab Edited Successfully';
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'add-driver') {
        $driver_name = $_POST['driver_name'];
        $mobile = $_POST['phone'];
        $address = $_POST['address'];
        $cab_id = $_POST['cab'];
        $status = $_POST['status'];
        $targetFile = '../uploads/proof/license.svg';

        if (isset($_FILES['license']['tmp_name']) && is_uploaded_file($_FILES['license']['tmp_name'])) {
            $target = '../uploads/proof/';
            $file = $_FILES['license']['tmp_name'];
            $targetFile = $target . basename($_FILES['license']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "insert into driver (name,phone,address,cab_id,license,status) values('$driver_name','$mobile','$address','$cab_id','$targetFile','$status')");

        if ($result) {
            $response['success'] = "Driver added Successfully";
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'edit-driver') {
        $id = $_POST['id'];

        $driver_name = $_POST['driver_name'];
        $mobile = $_POST['phone'];
        $address = $_POST['address'];
        $cab_id = $_POST['cab'];
        $status = $_POST['status'];
        $targetFile = $_POST['existing_image'];

        if (isset($_FILES['license']['tmp_name']) && is_uploaded_file($_FILES['license']['tmp_name'])) {
            $target = '../uploads/proof/';
            $file = $_FILES['license']['tmp_name'];
            $targetFile = $target . basename($_FILES['license']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "update driver set name='$driver_name',phone='$mobile',address='$address',cab_id='$cab_id',license='$targetFile',status='$status' where id=$id");

        if ($result) {
            $response['success'] = "Driver Edited Successfully";
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'delete-driver') {
        $id = $_POST['id'];

        $result = mysqli_query($connect, "delete from driver where id = '$id'");
        if ($result) {
            $response['success'] = 'Driver deleted successfully';
        } else {
            $response['failed'] = "Driver deletion Failed...!";
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'add-packages') {
        $package_name = $_POST['name'];
        $description = $_POST['description'];
        $duration = $_POST['duration'];
        $price = $_POST['price'];
        $places = $_POST['places'];
        $status = $_POST['status'];
        $targetFile = '../uploads/gallery/tour_place.jpg';

        if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
            $target = '../uploads/gallery/';
            $file = $_FILES['image']['tmp_name'];
            $targetFile = $target . basename($_FILES['image']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "insert into packages (name,description,duration,price,place,image,status) values('$package_name','$description','$duration','$price','$places','$targetFile','$status')");

        if ($result) {
            $response['success'] = "Package Added Successfully";
        } else {
            $response['failed'] = "Package insertin Failed...!";
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'edit-package') {
        $id = $_POST['id'];
        $package_name = $_POST['name'];
        $description = $_POST['description'];
        $duration = $_POST['duration'];
        $price = $_POST['price'];
        $places = $_POST['places'];
        $status = $_POST['status'];
        $targetFile = $_POST['existing_image'];

        if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
            $target = '../uploads/gallery/';
            $file = $_FILES['image']['tmp_name'];
            $targetFile = $target . basename($_FILES['image']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "update packages set name = '$package_name',description='$description',duration='$duration',price='$price',place='$places',image='$targetFile',status='$status' where id='$id'");

        if ($result) {
            $response['success'] = "Package Edited Successfully";
        } else {
            $response['failed'] = "Failed to edit....";
        }

        echo json_encode($response);
    }else if($_POST['action']=='delete-package'){
        $id = $_POST['id'];

        $result = mysqli_query($connect,"delete from packages where id = '$id'");

        if ($result) {
            $response['success'] = "Package Deleted Successfully";
        } else {
            $response['failed'] = "Failed to delete....";
        }

        echo json_encode($response);
    }
}
