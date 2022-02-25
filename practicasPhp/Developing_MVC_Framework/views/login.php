<?php 
print('
    <div class="" style="text-align:center">

    <h4 class="p1" style="color:white">User login</h4>

        <form action="" method="post">
        
        <div class="p_25">
            <input type="text" name="user" placeholder="usuario" required> 
        </div>

        <div class="p_25">
            <input type="password" name="pass" placeholder="password" required>
        </div>

        <div class="p_25">
            <input style="width:17.2%; font-size:18px" type="submit" class="button" value="send">
        </div>
        <style>
            .button:hover{
                background-color: red;
                transition: 0.5s;
                color: white;
            }
        </style>

        </form>
    </div>
');

if(isset($_GET['error'])){// if there is a GET URL called 'error' defined. This will trigger this prompt

    $template = '
    <div style="text-align:center" class="container">
        <p class="item error">%s</p>
    </div>
    ';

    printf($template, $_GET['error']);

}





?>