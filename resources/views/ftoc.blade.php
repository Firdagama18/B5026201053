<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Document</title>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        body{
        background-image: url(https://wallpapercave.com/wp/wp2749063.jpg);
        background-repeat: no-repeat;
        background-size: cover;

        }
        .container{
            align-items: center;
            justify-content: center;
            width: 700px;
            background: rgba(253, 227, 170, 0.781);
            padding: 20px;
            border-radius: 10px;
            margin: 50px auto;

        }
        button{
        width: 200px;
        }

    </style>
</head>
<body>
    <div class="container mt-3 mb-3 shadow-lg">

        <form name="RegistrationForm" action="result" method="post">
            @csrf
            <center><h1>Degree Converter</h1></center>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Enter degree in fahrenheit</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <input type="number" name="fahrenheit" id="fahrenheit" class="form-control form-control-sm">
                            </div>
                        </div>
                        </div>

                        <br>

                        <div class="button text-center mb-3">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        </div>
                        </div>

                    </form>
                </div>
</body>
</html>
