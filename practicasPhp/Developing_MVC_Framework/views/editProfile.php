<?php
$template='
<form class="item" method="POST">

    <table class="item">

        <tr>
            <td colspan="2">
                <h2>Edit your profile: %s </h2>
            </td>
        </tr>

        <input type="text" class="p1" name="edit_user" readonly hidden value="%s"></td>

        <tr>
            <td><b>Edit your name:</b></td>
            <td><input type="text" class="p1" name="edit_name" required value="%s"></td>
        </tr>

        <tr>
            <td><b>Edit your email:</b></td>
            <td><input type="text" class="p1" name="edit_email" required value="%s"></td>
        </tr>

        <tr>
            <td><b>Edit your birthday:</b></td>
            <td><input type="date" class="p1" name="edit_birthday" required value="%s"></td>
        </tr>

        <tr>
            <td><b>Edit your password:</b></td>
            <td><input type="password" class="p1" name="edit_pass" required></td>
        </tr>

        <tr>
            <td><b>Your role is:</b></td>
            <td><input type="text" class="p1" name="edit_role" readonly value="%s"></td>
        </tr>

        <br>

        <tr>
            <td><b style="color:white">Save changes?</b></td>
            
            <input type="text" hidden name="data">
            <td><input type="submit" class="p1" value="Save"></td>
        </tr>
    </table>

</form>
';

printf(
    $template,
    $_SESSION['user'],
    $_SESSION['user'],
    $_SESSION['name'],
    $_SESSION['email'],
    $_SESSION['birthday'],
    $_SESSION['role'],
);


?>