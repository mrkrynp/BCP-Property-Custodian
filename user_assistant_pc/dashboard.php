<?php
include('../config.php'); 

session_start ();

$accId = $_SESSION['accId'];
$sql = mysqli_query($conn,"SELECT * FROM pc_accounts WHERE accId = $accId ");
$accInfo = mysqli_fetch_array($sql);

if(!isset($_SESSION["login_user"])){
    header("location:../login.php"); 
}
if($_SESSION['roleId'] == 1) { // Admin
    header("location:../user_admin/dashboard.php");
} else if($_SESSION['roleId'] == 2){ // Head Dept
    header("location:../user_head_department/dashboard.php");
} else if($_SESSION['roleId'] == 3){ // Auditor
    header("location:../user_auditor/dashboard.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style/main.css" />
    <link rel="stylesheet" href="../style/sidebar.css" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

    <?php include('temps/header.php'); ?>
    <div class="container-fluid">
        <h3>Welcome ASSISTANT: <?php echo $accInfo['firstName']." ".$accInfo['lastName']?>    </h3>
    </div>
    <?php include('temps/footer.php'); ?>

</body>
</html>