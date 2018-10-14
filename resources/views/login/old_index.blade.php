<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('css/login/login.css')}}"/>
    <script src="main.js"></script>
</head>
<body>
    <div class="login-container">
        <img src="{{url::asset('image/images.jpg')}}">
        <div class="login-form">
        <form method="POST" action="/home">
            {{csrf_field()}}
            <table>
                <tr>
                    <td>Username</td>
                </tr>
                <tr>
                    <td><input type="text" name="username" class="text-input"></td>
                </tr>
                <tr>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input type="password" name="password" class="text-input"></td>
                </tr>
                <tr>
                    <td><input type="submit" class="text-submit"></td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</body>
</html>