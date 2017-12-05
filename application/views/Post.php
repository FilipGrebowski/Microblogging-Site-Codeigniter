// author: Filip Grebowski

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Post a Message</title>
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

        .container {
            display: grid;
            grid-template-columns: 20% 2fr 6fr 20%;
            grid-template-rows: 50px 100px 100px 100px 100px 300px;
            grid-gap: 1rem;
        }

        h1 {
            text-align: center;
        }

        .position-input-box {
            display: flex;
            flex-flow: column wrap;
            align-items: center;
        }

        .input-box {
            height: 60px;
            width: 600px;
            font-size: 20px;
            padding: 0 10px 0 10px;
        }

        input[type="submit"]{
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
        }
        
        .position-submit-button {
            display: flex;
            flex-flow: column wrap;
            align-items: flex-end;
            margin-right: 59px;
        }

        .submit-button {
            height: 44px;
            width: 100px;
            margin-left: 20px;
            margin-top: 10px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            padding: 0 10px 0 10px;
            font-size: 20px;
            background-color: rgb(0, 128, 128);
            color: white;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: rgba(0, 128, 128, 0.9);
        }

        .box-1 {
            background-color: #FF3B3F;
            grid-column: 2/3;
            grid-row: 2/3;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .logout-button {
            width: 150px;
            height: 40px;
            font-size: 20px;
            -webkit-border-radius:;
            -moz-border-radius:;
            border-radius: 5px;
            border: none;
            background-color: white;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #716E83;
            color: white;
            border: 1px solid white;
            width: 155px;
            height: 45px;
        }

        .box-2 {
            background-color: #FF3B3F;
            grid-column: 2/3;
            grid-row: 3/6;
            border-radius: 10px;
            display: grid;
            grid-template-columns: auto;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            font-size: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
        }

        .box-2-1 {
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.8);
        }

        .box-2-2 {
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.8);
        }

        .box-2-3 {
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.8);
        }

        .box-2-4 {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        a {
            text-decoration: none;
        }

        a:visited {
            color: white;
        }

        a:hover {
            font-size: 22px;
            cursor: pointer;
        }

        .box-3 {
            background-color: white;
            grid-column: 3/4;
            grid-row: 2/4;
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, 0.8);
        }

        .box-4 {
            background-color: #1D2731;
            grid-column: 3/4;
            grid-row: 4/7;
            border-radius: 10px;
            /*border: 1px solid rgba(255, 255, 255, 0.5);*/
        }

        .column-1 {
            width: 15%;
            padding-top: 6px;
            padding-bottom: 6px;
            padding-left: 15px;
        }

        .column-2 {
            width: 55%;
            padding-top: 6px;
            padding-bottom: 10px;
        }

        .column-3 {
            width: 15%;
            padding-top: 6px;
            padding-left: 5%;
            padding-bottom: 6px;
        }

    </style>
</head>
<body>

<div class="container">

    <div class="box-1">
        <form action="/proj/co539c/microblog/fjg4/ci-project/index.php/user/logout">
            <button class="logout-button" name="logout-button" type="submit">Logout</button>
        </form>
    </div>

    <div class="box-2">
        <div class="box-2-1">
            <a>My Messages</a>
        </div>
        <div class="box-2-2">
            <a href="/proj/co539c/microblog/fjg4/ci-project/index.php/Message/index">Post a Message</a>
        </div>
        <div class="box-2-3">
            <a>Message Feed</a>
        </div>
        <div class="box-2-4">
            <a href="/proj/co539c/microblog/fjg4/ci-project/index.php/search">Search</a>
        </div>
    </div>

    <div class="box-3">

        <h1>Post a Message</h1>
        <form action="/proj/co539c/microblog/fjg4/ci-project/index.php/Message/doPost" method="post">
            <div class="message-container">
                <div class="position-input-box">
                    <input class="input-box" placeholder="Write a message..." type="text" name="message-box">
                </div>
                <div class="position-submit-button">
                    <input class="submit-button" type="submit" value="Post">
                </div>
            </div>
        </form>

    </div>

    <div class="box-4">
        <!--<div class="table-container">
            <table>
                <?php /*foreach ($results as $row) { */?>
                    <tr>
                        <td class="column-1"><?php /*echo $row['user_username']; */?></td>
                        <td class="column-2"><?php /*echo $row['text']; */?></td>
                        <td class="column-3"><?php /*echo $row['posted_at']; */?></td>
                    </tr>
                <?php /*} */?>
            </table>
        </div>-->
    </div>

</div>

</body>
</html>
