<html>
    <head>
        <title>REGISTRATION</title>
    </head>
    <body>
        <form method="POST" style="height: 200px;width: 300px">
            <fieldset >
                <legend>
                    <b>REGISTRATION</b>
                </legend>
                <table border="0">
                    <tr><td colspan="2">ID</td></tr>
                    <tr>
                        <td colspan="2"><input type="text" name="id"></td>
                    </tr>
                    <tr><td colspan="2">Password</td></tr>
                    <tr>
                        <td colspan="2"><input type="password" name="password"></td>
                    </tr>
                    <tr><td colspan="2">Confirm Password</td></tr>
                    <tr>
                        <td colspan="2"><input type="password" name="confirmPassword"></td>
                    </tr>
                    <tr><td colspan="2">Name</td></tr>
                    <tr>
                        <td colspan="2"><input type="text" name="name"></td>
                    </tr>
                    
                
                    <tr><td colspan="2">User Type</td></tr>
                </table><hr>
                <table border="0">
                    <tr>
                        <select>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </tr>
                    
                    
                    
                </table>
                <hr>
                <table border="0">
                    <tr>
                         
                        <td><input type="submit" name="register"  value="Register"></td>
                        <td><a href="..index.php">Login</a></td>

                       
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>