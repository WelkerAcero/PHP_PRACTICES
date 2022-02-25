<?php

print('
    <div class="item" style="margin-top:-15%;text-align:center">

        <form action="" method="POST" style="">
                
        <div class="item">
            <h3 class="p1">Verification password is needed</h3><br>
            <label class="p1">Write your current password:</label><br>
            <input type="text" hidden class="p1" name="r" value="editProfile">
            <input type="text" class="p1" name="current_password">
        </div>

        <div class="item">
            <input type="submit" class="p1" value="Send">
        </div>

        </form>

    </div>
');