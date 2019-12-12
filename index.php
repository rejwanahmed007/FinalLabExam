<html>
    <head>
        <title>Sign In</title>
    </head>
    <body>
        <form method="POST" style="height: 200px;width: 300px" action="uservalidation.php">
            <fieldset >
                <legend>
                    <b>LOGIN</b>
                </legend>
                <table border="0">
                    <tr><td colspan="2">User ID</td></tr>
                    <tr>
                        <td colspan="2"><input type="text" name="id"></td>
                    </tr>
                    <tr><td colspan="2">Password</td></tr>
                    <tr>
                        <td colspan="2"><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name="remember">Remember Me</td>
                    </tr>
                </table>
                <hr>
                <table border="0">
                    <tr>
                        <td><input type="submit" name="login"  value="Login"></td>

                        <td><a href="views/registration.php">Register</a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>