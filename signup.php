<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background: #007bec;
            color: #fff;
            font-size: 1.5em;
            font-weight: 400;
            text-align: right;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
 
        .main {
            position: relative;
            background: #ffffff;
            color: #0e5698;
            display: inline-block;
            padding: 15px 30px;
            margin: 0 auto;
            border-radius: 7px;
            box-shadow: 0 50px 50px rgba(0, 0, 0, 0.2);
            min-height: 250px;
            min-width: 400px;
        }

        h1 {
            font: 30px sans-serif;
            text-align: center;
            margin: 25px 10px;
            font-weight: bold;
            color: #4a96db;
        }

        input,
        button,
        select,
        textarea {
            display: block;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-top: 10px;
            line-height: 28px;
            height: 30px;
            padding: 0 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: sans-serif;
            font-size: 15px;
        }
        p{
            display: block;
            margin-block-start: 0em;
            margin-block-end: 0em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-size:large;
            color: red;
        }

        button {
            background: #007bec;
            color: #fff;
            line-height: 40px;
            height: 40px;
            font-size: 18px;
            border: 0;
        }

        button:hover {
            opacity: 0.7;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class='main'>
        <h1>Login</h1>
        <form action="signup php.php"  method="post">
            <input type="text" name="data[username]" placeholder="Username">
            <?php 
            if (isset($_GET["username"])) {
                echo "<p>باید 15 تا باشه</p>";
            }
            ?>
            <input type="text" name="data[phonenumber]" placeholder="Phone Number">
            <?php if (isset($_GET["eleven"])) {
                echo "<p>باید 11 تا باشه</p>";
            }?>
            <input type="email" name="data[email]" placeholder="E-mail">
            <?php 
            if (isset($_GET["email"])) {
                echo "<p>خیلی زیاده عزیز</p>";
            }
            
            ?>
            <input type="password" name="data[password]" placeholder="Password">
            <?php if (isset($_GET["pass"])) {
                echo "<p>باید بیشتر یا مساوی هشت باشه</p>";
                if (isset($_Get["much"])) {
                echo "<p>دیگه خیلی زیاد شد</p>";
                }
            }?>
            <input type="password" name="data[repassword]" placeholder="Re password">
            <?php 
            if (isset($_GET["empty"])) {
                echo "<p>لطفا کاملش کن</p>";
            }
            if (isset($_GET["uneqi"])) {
                echo "<p>باید با بالایی مساوی باشه</p>";
            }
            ?>
            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>

</html>
