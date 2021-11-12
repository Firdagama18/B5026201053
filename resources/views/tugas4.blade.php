<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image:url('images/background.jpg');
            color: rgb(149, 121, 168);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-repeat: no-repeat;
            background-size:cover;
            height:100vh;
        }
        .ancestors * {
          display: block;
          border: 2px solid rgb(212, 110, 110);
          color: rgb(97, 88, 88);
          padding: 5px;
          margin: 15px;
          border-style:ridge;
        }
    </style>

    <script>
        $(document).ready(function(){
          $("span").parents().css({"color": "red", "border": "2px solid red"});
        });
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>jQuery Traversing Ancestors</title>
</head>
 <body class="ancestors">JQuery parents()
    <div class="container">
        <h3>Time for know me so well!!</h3>
        <p><i>This link will make you to know about me: </i></p>
        <ul>
            <li><a href="https://www.linkedin.com/in/firdaus-wahyu-gama-ashaari-770892211/"target="_blank">Firdaus Wahyu Gama Ashaari</a></li>
            <li><a href="https://www.instagram.com/firdagama/"target="_blank">@Firdagama</a></li>
        </ul>
</div>
</body>
</html>
