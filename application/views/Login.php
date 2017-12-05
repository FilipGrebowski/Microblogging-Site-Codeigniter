// author: Filip Grebowski

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">

    <style>

        body {
            padding: 0;
            margin: 0;
            font-family: 'Barlow', sans-serif;
            background-color: #1D2731;
        }

        input:focus,
        select:focus,
        textarea:focus,
        button:focus {
            outline: none;
        }

        input[type="submit"]{
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
        }

        .container {
            display: grid;
            grid-template-columns: 40% auto 40%;
            grid-template-rows: 100px 500px;
        }

        .box-1 {
            background-color: #FF3B3F;
            grid-column: 2/3;
            grid-row: 2/3;
            -webkit-border-radius:;
            -moz-border-radius:;
            border-radius: 10px;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.5);
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 80px;
        }

        .login-container {
            display: block;
            margin: 0 auto;
        }

        .submit-button {
            text-align: center;
            margin-top: 40px;
            height: 44px;
            width: 100px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            padding: 0 10px 0 10px;
            font-size: 20px;
            background-color: rgb(0, 128, 128);
            color: white;
            cursor: pointer;
            border-radius: 3px;
        }

        .submit-button:hover {
            background-color: rgba(0, 128, 128, 0.8);
            border-radius: 3px;
        }


        .submit-button-location {
            text-align: center;
        }

        .username, .password {
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 40px;
            width: 260px;
            font-size: 20px;
            padding: 0 10px 0 10px;
        }

        .error-messages {
            text-align: center;
        }

    </style>
</head>
<body>

    <div class="container">
        <div class="box-1">
            <h1>Login to Account</h1>
            <?php /*print_r($this->session->all_userdata()); */?>
            <div class="error-messages">
                <?php echo validation_errors(); ?>
            </div>
            <form action="/proj/co539c/microblog/fjg4/ci-project/index.php/user/doLogin" method="post">
                <div class="login-container">
                    <div>
                        <input class="username" placeholder="Username" type="text" name="username">
                    </div>
                    <br>
                    <div>
                        <input class="password" placeholder="Password" type="password" name="password">
                    </div>
                    <div class="submit-button-location">
                        <input class="submit-button" type="submit" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
