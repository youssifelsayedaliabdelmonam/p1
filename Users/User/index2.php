<?php
session_start();
require_once("../../classes.php");
$users = unserialize($_SESSION["Users"]);
$my_posts = $users->my_posts($users->id);
$p_photo = $users->my_photo($users->id);
$all_users = $users->my_users();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mySocial - Responsive Social Media Website Using HTML, CSS, & JavaScript</title>
    <!-- IconScout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style2.css">

</head>

<body>
    <nav>
        <div class="container">
            <h2 class="logo">
                Tecnological Circuit
            </h2>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Search for creators, inspirations, and projects">
            </div>
            <div class="create">
                <form action=" photo.php" method="post">
                    <button type="submit" class="btn btn-primary">update photo</button>
                </form>

                <div class="profile-photo">
                    <a href="profile/index3.php"><img src="
                    <?php

                    foreach ($p_photo as $pp) {
                        if (!empty($pp["photo"])) {
                            echo $pp["photo"];
                        }
                    }
                    ?>"></a>
                </div>
            </div>
        </div>
    </nav>

    <!-------------------------------- MAIN ----------------------------------->
    <main>
        <div class="container">
            <!----------------- LEFT -------------------->
            <div class="left">
                <a class="profile">
                    <div class="profile-photo">


                        <img src="<?php foreach ($p_photo as $pp) {
                                        echo $pp["photo"];
                                    }
                                    ?>">
                    </div>
                    <div class="handle">
                        <h4><?= $users->name ?></h4>

                    </div>
                </a>

                <!----------------- SIDEBAR -------------------->
                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="uil uil-home"></i></span>
                        <h3>Home</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-compass"></i></span>
                        <h3>Explore</h3>
                    </a>
                    <a class="menu-item" id="notifications">
                        <span><i class="uil uil-bell"><small class="notification-count">9+</small></i></span>
                        <h3>Notification</h3>
                        <!--------------- NOTIFICATION POPUP --------------->
                        <div class="notifications-popup">
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-2.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Keke Benjamin</b> accepted your friend request
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-3.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>John Doe</b> commented on your post
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-4.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Marry Oppong</b> and <b>283 Others</b> liked your post
                                    <small class="text-muted">4 Minutes Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-5.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Doris Y. Lartey</b> commented on a post you are tagged in
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-6.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Keyley Jenner</b> commented on a post you are tagged in
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-7.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Jane Doe</b> commented on your post
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                        </div>
                        <!--------------- END NOTIFICATION POPUP --------------->
                    </a>
                    <a class="menu-item" id="messages-notifications">
                        <span><i class="uil uil-envelope-alt"><small class="notification-count">6</small></i></span>
                        <h3>Messages</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-bookmark"></i></span>
                        <h3>Bookmarks</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-chart-line"></i></span>
                        <h3>Analytics</h3>
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i class="uil uil-palette"></i></span>
                        <h3>Theme</h3>
                    </a>
                    <a class="menu-item" href="../../login.php">
                        <span><i class="uil uil-setting"></i></span>
                        <h3>Logout</h3>
                    </a>
                </div>
                <!----------------- END OF SIDEBAR -------------------->
            </div>

            <!----------------- MIDDLE -------------------->
            <div class="middle">
                <!----------------- STORIES -------------------->
                <div class="stories">
                    <div class="story">

                        <div class="profile-photo">
                            <img src="<?php foreach ($p_photo as $pp) {
                                            echo $pp["photo"];
                                        }
                                        ?>">
                        </div>
                        <p class="name">Your Story</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/profile-9.jpg">
                        </div>
                        <p class="name">Lila James</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/profile-10.jpg">
                        </div>
                        <p class="name">Winnie Haley</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/profile-11.jpg">
                        </div>
                        <p class="name">Daniel Bale</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/profile-12.jpg">
                        </div>
                        <p class="name">Jane Doe</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/profile-13.jpg">
                        </div>
                        <p class="name">Tina White</p>
                    </div>
                </div>
                <!----------------- END OF STORIES -------------------->
                <form action="storepost.php" class="create-post" method="post" enctype="multipart/form-data">
                    <div class="profile-photo">

                        <img src="<?php foreach ($p_photo as $pp) {
                                        echo $pp["photo"];
                                    }
                                    ?>">
                    </div>
                    <input type="text" name="content" placeholder="What's on your mind, Diana ?" id="create-post">
                    <input type="file" name="file" value="Post" class="btn btn-primary">
                    <input type="submit" value="Post" class="btn btn-primary">
                </form>
                <?php
                if (isset($_GET["msg"]) && $_GET["msg"] == 'done') { ?>
                    <div class="alert alert-danger" role="alert" style="color: blue;">
                        <h4>post is successfully</h4>

                    </div>
                <?php
                }
                ?>
                <!----------------- FEEDS -------------------->
                <div class="feeds">
                    <!----------------- FEEDS 0-------------------->
                    <?php foreach ($my_posts as $post) { ?>
                        <div class="feed">

                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">

                                        <img src="<?php foreach ($p_photo as $pp) {
                                                        echo $pp["photo"];
                                                    }
                                                    ?>">
                                    </div>
                                    <div class="info">
                                        <h3><?= $users->name ?></h3>
                                        <small><?= $post["created_at"] ?> ago <br>
                                            <br></small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <form action="delete_post.php" method="post">
                                        <input type="hidden" name="user_id" value="<?= $post["id"] ?>">
                                        <input type="submit" value="remove post" class="btn btn-primary">
                                    </form>
                                </span>
                            </div>
                            <div class="caption">
                                <span class="harsh-tag"><?= $post["content"] ?><br></span>
                                </p>
                            </div>

                            <div class="photo">

                                <br><img src="<?= $post["image"] ?>">
                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">



                                    <span><i id="icon" class="uil uil-heart" onclick="like()"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">

                                    <!-- <span><i class="uil uil-bookmark-full"></i></span> -->

                                </div>
                            </div>

                            <div class="liked-by">
                                <h3 id="h3">0 liked</h3>
                            </div>



                            <form action="storecomment.php" class="create-post" method="post" enctype="multipart/form-data">
                                <input type="text" name="comment" placeholder="Your comment" id="create-post">
                                <input type="hidden" name="post_id" value="<?= $post["id"] ?>">
                                <input type="submit" value="Comment" class="btn btn-primary">
                            </form>
                            <form action="storelike.php" class="create-post" method="post" enctype="multipart/form-data">
                                <!-- <input type="text" name="like" placeholder="love or wow or sad or angry" id="create-post"> -->
                                <input type="hidden" name="post_id" value="<?= $post["id"] ?>">
                                <input type="submit" name="like" value="like" class="btn btn-primary">
                            </form>
                            <form action="del_like.php" method="post">
                                <?php foreach ($all_users as $user) { ?>
                                <?php } ?>
                                <input type="hidden" name="post_id" value="<?= $post["id"] ?>">
                                <input type="submit" value="remove likes" class="btn btn-primary">
                            </form>

                            <?php
                            $comments = $users->my_comments($post["id"]);
                            foreach ($comments as $comment) {?>
                            
                                <div class="caption">
                                    <p><b><?= $users->name ?> : </b>
                                    <span class="harsh-tag"><?= $comment["comment"] ?></span>
                                    <h4><span class="harsh-tag"><?= $comment["created_at"] ?><br><br> </span></h4>
                                    <form action="del_comment.php" method="post">
                                        <input type="hidden" name="commentt_id" value="<?= $comment["id"] ?>">
                                        <input type="submit" value="remove comment" class="btn btn-primary">
                                    </form>

                                    </p>
                                </div>

                            <?php
                            }
                            ?>

                        </div>
                    <?php } ?>


                    <!----------------- FEED 1 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-11.jpg">
                                </div>
                                <div class="info">
                                    <h3>Maha Mo</h3>
                                    <small>Dubai, 15 Minutes Ago <br><br></small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>
                        <div class="caption">
                            <p> Lorem ipsum dolor sit quisquam eius.
                                <span class="harsh-tag">#lifestyle</span>
                            </p>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-2.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i id="icon" class="uil uil-heart" onclick="like()"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <h3 id="h3">0 liked</h3>
                        </div>
                    </div>
                    <!----------------- END OF FEED 1 -------------------->
                    <!----------------- FEED 2 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-13.jpg">
                                </div>
                                <div class="info">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 Minutes Ago <br><br></small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>
                        <div class="caption">
                            <p> Lorem ipsum dolor sit quisquam eius.
                                <span class="harsh-tag">#lifestyle</span>
                            </p>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-1.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i id="icon" class="uil uil-heart" onclick="like()"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <h3 id="h3">0 liked</h3>
                        </div>
                    </div>
                    <!----------------- END OF FEED 2 -------------------->



                </div>
                <!----------------- END OF FEEDS -------------------->
            </div>
            <!----------------- END OF MIDDLE -------------------->

            <!----------------- RIGHT -------------------->
            <div class="right">
                <!------- MESSAGES ------->
                <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4>
                        <i class="uil uil-edit"></i>
                    </div>
                    <!------- SEARCH BAR ------->
                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Search messages" id="message-search">
                    </div>
                    <!------- MESSAGES CATEGORY ------->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <a href="msg.php">
                            <h6>private</h6>
                        </a>

                        <h6 class="message-requests">Requests (7)</h6>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-17.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Edem Quist</h5>
                            <p class="text-muted">Just woke up bruh</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-6.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Daniella Jackson</h5>
                            <p class="text-bold">2 new messages</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-8.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Chantel Msiza</h5>
                            <p class="text-muted">lol u right</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-10.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Juliet Makarey</h5>
                            <p class="text-muted">Birtday Tomorrow</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-3.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Keylie Hadid</h5>
                            <p class="text-bold">5 new messages</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-15.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Benjamin Dwayne</h5>
                            <p class="text-muted">haha got that!</p>
                        </div>
                    </div>
                </div>
                <!------- END OF MESSAGES ------->

                <!------- FRIEND REQUEST ------->
                <div class="friend-requests">
                    <h4>Requests</h4>
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="./images/profile-20.jpg">
                            </div>
                            <div>
                                <h5>Hajia Bintu</h5>
                                <p class="text-muted">8 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="./images/profile-18.jpg">
                            </div>
                            <div>
                                <h5>Edelson Mandela</h5>
                                <p class="text-muted">2 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="./images/profile-17.jpg">
                            </div>
                            <div>
                                <h5>Megan Baldwin</h5>
                                <p class="text-muted">5 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------- END OF RIGHT -------------------->
        </div>
    </main>

    <!----------------- THEME CUSTOMIZATION -------------------->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background</p>

            <!----------- FONT SIZE ----------->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2 active"></span>
                        <span class="font-size-3"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!----------- PRIMARY COLORS ----------->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!----------- BACKGROUND COLORS ----------->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Dark</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./index2.js"></script>
</body>

</html>