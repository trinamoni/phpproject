<html>

    <h2>Registration</h2>
    <form name="registration" name="register" id="register" action="save.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name" value=""/></td>
            </tr>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="username" id="username" value=""/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" id="pass" value=""/></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" id="address" row="5" col="10"></textarea></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" value="Regsiter"/>
                    <input type="reset"/>
                    
                </td>

            </tr>
        </table>
        <input type="hidden" name="form_type" value="register"/>
    </form>


</html>