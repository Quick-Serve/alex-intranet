<?php
require_once __DIR__.'/../functions.php';
require __DIR__.'/../connection.inc.php';
$user = $GLOBALS['user'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- block indexing -->
      <meta name="robots" content="noindex, nofollow">
      <meta name="googlebot" content="noindex, nofollow">


    <title>Marine & Diving Operations</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awsome -->
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <div class="container">
        <?php

  if(isadmin()){
      echo '<a href="newuser.php">Add new user</a>';
  }

  ?>