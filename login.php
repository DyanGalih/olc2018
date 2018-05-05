<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="default.php?page=login_process" method="post">
        <table>
            <tr>
                <td>
                    Username : 
                </td>
                <td>
                    <input type="text" name="username" />
                </td>
            </tr>
            <tr>
                <td>
                    Passowrd : 
                </td>
                <td>
                    <input type="password" name="password" />
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" name="login" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>