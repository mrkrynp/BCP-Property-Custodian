<?php 

$errorMsg = array('email' => '', 'password' => '', 'firstName' => '', 'middleInitial' => '', 'lastName' => '', 'deptName' => '', 'deptCampus' => '', 'deptFloor' => '', 'contactNumber' => '');
 if(array_filter($errorMsg)) {
  echo "error";
 } else {
  echo "success";
 }

 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Title</title>
  <link rel="stylesheet" href="../style/sidebar.css" />
  <link rel="stylesheet" href="../style/style.css" />
  <link rel="stylesheet" href="../style/main.css" />
  <link rel="stylesheet" href="../style/bootstrap.css" />
  <link rel="stylesheet" href="../style/login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
  <link rel="icon" type="image/x-icon" href="assets/images/bcp-logo.png">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>