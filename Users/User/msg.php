<?php
session_start();
require_once("../../classes.php");
$users = unserialize($_SESSION["Users"]);
$my_msg = $users->my_msg($users->id);
$p_photo = $users->my_photo($users->id);
?>


<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>msg</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../Admin/dist/css/adminlte.min.css">
    </head>

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <?php
				
				if(isset($_GET["msg"])&&$_GET["msg"]=='req_msg'){?>
                 <div
					class="alert alert-danger"
					role="alert"
					style="color: white;"
				 >
					 need massage
				 </div>
				 
                <?php
				}
				?>

    <div class="wrapper">

            <!-- DIRECT CHAT -->

            <div class="card direct-chat direct-chat-warning">
                <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>

                    <div class="card-tools">
                        <form action="">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fas fa-commentS"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">
                                </span>
                                <span class="direct-chat-name float-left"><?= $users->name ?></span>

                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <a href="profile/index3.php"><img class="direct-chat-img" src="
                    <?php

                    foreach ($p_photo as $pp) {
                        if (!empty($pp["photo"])) {
                            echo $pp["photo"];
                        }
                    }
                    ?>"></a>
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="../Admin/dist/img/user3-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left"><?= $users->name ?></span>
                                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <a href="profile/index3.php"><img class="direct-chat-img" src="
                    <?php

                    foreach ($p_photo as $pp) {
                        if (!empty($pp["photo"])) {
                            echo $pp["photo"];
                        }
                    }
                    ?>"></a> <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Working with AdminLTE on a great new app! Wanna join?
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="../Admin/dist/img/user3-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                I would love to.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
            <?php foreach ($my_msg as $msg) { ?>

                            <!-- /.direct-chat-msg -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left"><?= $users->name ?></span>
                                    <span class="direct-chat-timestamp float-right"><?= $msg["created_at"] ?></span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <a href="profile/index3.php"><img class="direct-chat-img" src="
                    <?php

                            foreach ($p_photo as $pp) {
                                if (!empty($pp["photo"])) {
                                    echo $pp["photo"];
                                }
                            }
                    ?>"></a> <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    <?= $msg["content"] ?>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>

                    </div>
                    <!--/.direct-chat-messages-->

                    
                </div>
                <!-- /.card-body -->



            <?php } ?>
            <form action="storemsg.php" class="create-post" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                

                <span class="input-group-append">
                    <button type="submit" class="btn btn-warning">Send</button>
                    <a href="index2.php"><button type="button" class="btn btn-warning">back</button></a>
                </span>
            </div>
        </form>

            </div>
            <!-- /.card-footer-->
        </div>
        <!--/.direct-chat -->
        </div>



    </body>