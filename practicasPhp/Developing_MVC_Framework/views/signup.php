<form action="" method="post">
    <div class="item">
        <p>Your name</p>
        <input type="text" name="name_signup" placeholder="Write your name" required>
    </div>

    <div class="item">
        <p>Your email</p>
        <input type="text" name="email_signup" placeholder="Write your email" required>
    </div>

    <div class="item">
        <p>Your birthday</p>
        <input type="date" name="birthday_signup" placeholder="Select your birthday" required>
    </div>

    <div class="item">
        <p>Your users</p>
        <input type="text" name="user_signup" placeholder="Write your user" required>
    </div>

    <div class="item">
        <p>Your password</p>
        <input type="password" name="password_signup" placeholder="Write your password" required>
    </div>

    <div class="item">
        <p>Your role is:</p>
        <input type="text" name="role_signup" readonly value="User">
    </div>

    <div class="item">
        <input class="button" type="submit" value="Send">
    </div>
</form>

<?php
    if (!empty($_POST['user']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['birthday']) && !empty($_POST['role'])) {

        $user_data = array(
            "user" => $_POST['user_signup'],
            "email" => $_POST['email_signup'],
            "name" => $_POST['name_signup'],
            "birthday" => $_POST['birthday_signup'],
            "pass" => $_POST['password_signup'],
            "role" => $_POST['role_signup'],
        );
    }
?>