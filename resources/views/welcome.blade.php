<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sam's Soup shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato|Permanent+Marker" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html {
                box-sizing: border-box;
            }
            *, *:before, *:after {
                box-sizing: inherit;
            }

            body {
                font-family: Lato, Arial, Helvetica, sans-serif;
                background-color: #ffff99;
                padding: 0;
                margin: 0;
            }
            .border {
                border: 2px solid green;
                width: 80%;
                padding: 10px;
                overflow: auto;
                margin: 0 auto;
                padding-top: 80px;
            }
            header {
                background-color: #58582C;
                width: 100%;
                overflow: auto;
                position: fixed;
            }
            header h1 {
                color: white;
                margin: 0;
                padding: 0.5em;
                width: 35%;
                float: left;
            }
            h2 {
                color: #58582C;
                margin: 1em;
            }
            img {
                border: 2px solid green;
                float: left;
                margin: 0 1em 1em 3em;
            }
            .clearfloat {
                clear: both;
            }
            article {
                width: 65%;
                float: left;
            }
            aside {
                color: #58582C;
                font-weight: bold;
                width: 33%;
                float: left;
            }
            nav {
                font-size: 1.2em;
                font-weight: bold;
                width: 60%;
                float: left;
                padding-top: 1.5em;
            }
            nav ul {
                padding: 0;
                margin: 0;
                list-style-type: none;
                text-align: right;
            }
            nav li {
                display: inline;
                padding-right: 1.3em;
            }
            nav a {
                display: inline-block;
                text-decoration: none;
                color: white;
            }
            nav a:hover {
                color: #999966;
            }
            blockquote {
                width: 372px;
                height: 150px;
                display: block;
                position: relative;
                border-radius: 20px;
                padding: 1em;
                box-shadow: 15px 15px 20px 0px rgba(153,153,153,1);
            }
            blockquote::after {
                content: "";
                background: url("image/menupic.jpg");
                background-color: #cccccc;
                opacity: 0.4;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                position: absolute;
                z-index: -1;
                border-radius: 20px;

            }
            footer {
                padding: 1em;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <header>
        <h1> Sam's Soup shop</h1>
        <nav>
            <ul>
                <li id="navpart1"><a href="index.html">Main page</a></li>
                <li id="navpart2"><a href="menu.html">Menu</a></li>
                <li id="navpart3"><a href="form.html">Online orders</a></li>
            </ul>
        </nav>
    </header>
    <div class="border">
        <article>
            <h2>About us</h2>
            <p>We are a very special soup shop. We make and sell all kinds of soup. We have soups from France, from Italy, from Senegal, from Korea, from India, from China and some surprises that you would not expect. Come try our soup. </p>
            <p><img src="image/tofugreenssoup.jpg" alt="tofugreensoup"></p>
            <p><img src="image/tomcheesesoup.jpg" alt="tomatocheesesoup"></p>
            <p><img src="image/hotsoursoup.jpg" alt="hotandsoursoup"></p>
            <p><img src="image/frenchonionsoup.jpg" alt="frenchonionsoup"></p>
        </article>
        <aside>
            <h2>Soup of the day: </h2>
            <ul>
                <li>Monday: Mauritian Meat</li>
                <li>Tuesday: Tunisian Turkey</li>
                <li>Wednesday: Welsh Wombat</li>
                <li>Thursday: Thai Turnip</li>
                <li>Friday: French Fish </li>
                <li>Saturday: Senegalese Sausage</li>
                <li>Sunday: Spanish Sensation</li>
            </ul>
        </aside>
    </div>
    <footer>
        <p>Located at 3330 Broadway, NY 10031; Phone: 212-222-4242</p>
    </footer>
    </body>
</html>
