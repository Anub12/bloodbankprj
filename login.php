<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login to Blood Bank Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
        function validate() {
            var username = document.login.username.value;
            var password = document.login.password.value;
            if (username == null || username == "") {
                alert("Username ca't be blank");
                return false;
            }
            else if (password == null || password == "") {
                alert("password can't be blank");
                return false;
            }
        }
    </script>
</head>
<center>
    <table>
        <body>
            <div>
                <form name="bbms" method="post" action="connection.php" onsubmit="return validate();" >
                <tr>
                    <td>
                        User: <th><input type="text" name="username" required></input></th><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password: <th><input type="text" name="password" required></input></th><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Login"/>
                        <input type="reset" />
                    </td>
                </tr>
                </form>
            </div>
        </body>
    </table>
</center>
</html>