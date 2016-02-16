<?php
require '../pages/db-connect.php';
require '../pages/session_validation.php';
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>CHAT SPACE</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

</head>
<body style="font-family:Verdana">

  <div class="container">
    <?php
    $home = 'class="active"';
    $inventory = '';
    $users = '';
    include '../pages/header.php';
    ?>
<div class="row " style="padding-top:40px;">
    <h3 class="text-center" >WELCOME TO THE CHAT SPACE</h3>
    <br /><br />
    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                RECENT CHAT HISTORY
            </div>
            <div class="panel-body">
<ul class="media-list">
  <div id="chat"> </div>
</ul>
            </div>
            <div class="panel-footer">
                <div class="input-group">
                    <input type="text" class="form-control" id="message" placeholder="Enter Message" />
                    <span class="input-group-btn">
                        <button class="btn btn-info" id="send" type="submit">SEND</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
               ONLINE USERS
            </div>
            <div class="panel-body">
                <ul class="media-list">
                        <li class="media">
                            <div class="media-body">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.png" />
                                    </a>
                                    <div class="media-body" >
                                        <h5>Alex Deo | User </h5>
                                       <small class="text-muted">Active From 3 hours</small>
                                    </div>
                                </div>
                            </div>
                        </li>
         <li class="media">
                            <div class="media-body">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.gif" />
                                    </a>
                                    <div class="media-body" >
                                        <h5>Jhon Rexa | User </h5>
                                       <small class="text-muted">Active From 3 hours</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
</div>
  </div>

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/Socket main.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
