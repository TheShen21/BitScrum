<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TypeRacer</title>
    <link rel="icon" href="img/keyboard.svg">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
          * {
            box-sizing: border-box;
              margin: 0;
            padding: 0;
            font-family: 'Raleway', sans-serif;


            background-color: rgb(34, 32, 32);

        }

       img#logo {
            width: 10vw;
            height: auto;
        }

        .TypingGame {
            color: #deb887;
            background-color: transparent;
            resize: none;
            outline: none;
            border: none;
            font-family: 'Raleway', sans-serif;
            font-size: 2vw;
        }

        ::placeholder {
            color: burlywood;
        }

        #timer {
            color: burlywood;
            font-family: 'Raleway', sans-serif;
            font-size: 4vw;
        }

        div#wrapper {
            background-color: rgb(250, 241, 234);
        }

        header {
            display: flex;
            justify-content: space-between;
            grid-column: 1/5;
            font-family: 'Raleway', sans-serif;
            color: burlywood;
        }

        img#logo {
            width: 320px;
            margin-left: 50px;
        }

        img {
            width: 100%;


        }

        ul{
            width: 100%;
            border-top: 1px solid gold;
            border-bottom: 1px solid gold;
        }

        li {
            margin: 0 40px 0 40px;
            padding: 10px;
            padding-left: 20px;


        }

        li a {

            text-decoration: none;
            font-weight: 700;
            align-self: center;
        }

        @media all and (min-width: 550px) {
            ul {

            }

            li {
                display: inline-block;
                border: none;

            }
        }

        h3 {
            color: rgb(220, 106, 94);
            font-weight: 600;
        }

        section, footer {
            padding: 20px;
        }

        @media all and (min-width: 550px) {
            section#nieuws {
                width: 40%;
                float: left;
            }

            section#instrumenten {
                width: 60%;
                float: right;
            }
        }

        @media all and (min-width: 920px) {
            section#nieuws {
                width: 30%;
                float: left;
            }

            section#instrumenten {
                width: 70%;
                float: right;
            }
        }

        article {
            display: inline-block;
            width: 45%;
            margin-right: 20px;
        }

        article:nth-child(even) {

        }

        @media all and (min-width: 1200px) {
            div#wrapper {
                width: 1200px;
                margin: auto;
            }
        }

        footer {

            clear: both;
        }

        footer h3 {

        }

        p {
            color: #deb887;
        }

        img, svg {
            height: 50px;
            width: 50px;
            color: #deb887;

        }

        h1 {
            color: #deb887;
            grid-column: 1/5;
            font-size: 30px;
        }




        h2 {

            color: #deb887;


        }
        .user{

           float: right;
            margin-top: -6px ;
        }


        .knop {

           text-align: center;
            font-size: 30px;
            font-family: Verdana;
            font-weight: normal;
            width: 40%;
            background: #6ADE96;
            tevertical-align: center;
            border-radius: 300px;
            margin: 50px auto 0 auto;
            color: black;
            padding: 20px 0 20px 0;
            text-decoration: none;

        }
        .menu{

            font-size: 25px;
            color: white;
            text-decoration: none;
        }

        a:visited{
            color: white;
        }
        a{
            color: white;
        }
        .knop:hover{
            box-shadow: 5px 10px 18px rgba(222,169,85,0.4);
            color: gold;
        }
        .left-margin{
            display: inline;
            margin-left: 20px;
        }
        #user-icon{
            margin-top: 10px;
            margin-right: 50;
        }

    </style>
</head>
<body>
    <header><a href="index.php"><img id="logo" src="img/logo.svg"></a>
        <div class="user">

        </div>
        </header>

    <ul class="menu">
        <li><a  href="#"><img src="img/logo_yellow.png">Play Game</a></li>

        <li><a href="about.php"><img src="img/info_yellow.png"><p class="left-margin">About</p></a></li>

        <li><a href="leaderboard.php"><img src="img/leaderboard_yellow.png"><p class="left-margin">Leaderboard</p></a></li>

        <li class="user"><img id="user-icon" src="img/user_yellow.png" alt=""></li>

        <li class="user"><p class="bottom-margin"><?php echo htmlspecialchars($_SESSION["username"]); ?></p></li>


    </ul>
<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
<p>
    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    <a href="../lib/backend/logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
</p>
</body>
</html>



