<html>

    <h2>Login</h2>
    <form name="login" name="login" id="login" action="save.php" method="post">
        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="username" id="username" value=""/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" id="pass" value=""/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" value="Login"/>
                    <input type="reset"/>
                    
                </td>

            </tr>
        </table>
        <input type="hidden" name="form_type" value="login"/>
    </form>


</html>