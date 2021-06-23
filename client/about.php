<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" href="img/keyboard.svg">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
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
            align-items: center;
            font-family: 'Raleway', sans-serif;
            color: burlywood;
        }

        img#logo {
            margin-left: 50px;
            width: 320px;
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
                width: 70%;
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
            text-align:justify
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
        }

        h1 {
            color: #deb887;
        }

        table, border {
            color: #deb887;
            align-self: center;
            text-align: center;
            align-items: center;
            display: flex;
        }
        .user{

            float: right;
            margin-top: -6px ;
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
        .left-margin{
            display: inline;
            margin-left: 20px;
        }




    </style>
</head>
<body>

<header><a href="../index.html"><img id="logo" src="img/logo.svg"></a>
    <div class="user">

    </div>
</header>
<ul class="menu">
    <li><a  href="../TypeRacer/typeracer.html"><img src="img/logo_yellow.png">Play Game</a></li>

    <li><a href="about.html"><img src="img/info_yellow.png"><p class="left-margin">About</p></a></li>

    <li><a href=""><img src="../img/leaderboard_yellow.png"><p class="left-margin">Leaderboard</p></a></li>

    <li class="user"><a href="Register.php"><p>Register</p></a></li>

    <li class="user"><a href="Login.php"><p>Login</p></a></li>


</ul>




<section>
    <article>
        <h3>What is Typeracer?</h3>
        <p> So, you want to know what Typeracer is, right? Well, Typeracer is a game that test how fast your typing
            skills
            are.
            However, on our website, we have you write strings of code instead of words and/or phrases. The reasons why
            are
            simple. First, we want to stand out from the crowd and not do what the others do. And second, we want to
            train
            you into becoming a programmer yourself, because we think that being a software developer is the best
            occupation
            for this current generation.
        </p>
    </article>

    <article>
        <h3>Types of code that you'll learn here.</h3>

        <p> As already mentioned, it isn't just our priority to make you a fast typer, but to also make you a good
            coder. There are plenty of types of code out there for you use and (hopefully not) abuse. However, we are
            most focused on teaching you is the art of javascript. Why, well that's easy. The reason why we only
            prioritize javascript over everything else is, because it is the first coding languish that we were taught
            in school.</p>
    </article>


    <article>
        <h3>Javascript</h3>

        <p> Now that you know why we prioritize javascript over everything else, let's give a quick explanation on what
            it is. Javascript is all about the
            interactivity of your website. For example, say you have two photos. You click on Photo one and a smiley
            appears. However, if you click right afterwards on photo two, the smiley will "teleport" from photo one
            photo
            two.</p>
    </article>

</section>

</body>
</html>