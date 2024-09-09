<?php include('./pages/includes/db.php');
session_start();
if(isset($_POST['login']))
{
    $name=$_POST['umail'];
    $pass=$_POST['upass'];
    $sql="SELECT * FROM admin where name='$name'";
    $res=$connect->query($sql);
    foreach($res as $value)
    {
        $dbname=$value['name'];
        $dbpass=$value['password'];
    }
    if($name==$dbname && $pass==$dbpass)
    {
        $_SESSION['username']=$name;
        header('Location:pages/dashboard.php');
    }
    else{
        header('Location:index.php');
    }
}

?>