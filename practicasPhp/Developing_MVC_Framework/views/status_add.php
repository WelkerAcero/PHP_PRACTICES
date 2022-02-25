<?php

if( $_POST['r'] == 'status_add' && $_SESSION['role'] == 'Admin' && !isset($_POST['crud']) ) {

    print('
        <h2 class="p1">Add new status</h2>
        <form class="item" method="POST">
            <div class="p_25 container">   
                <input type="text" name="status" placeholder="write the new status" required>
            </div>

            <div class="p_25">
                <input class="" hidden name="r" value="status_add">
                <input class="" hidden name="crud" value="set">
                <input class="p1 button add" type="submit" value="Add">
            </div>
        </form>
    ');

} elseif ( $_POST['r'] == 'status_add' && $_SESSION['role'] == 'Admin' && $_POST['crud'] == 'set'){
    $status_controller = new StatusController();
    
    $new_status = array(
        'status_id' => 0,
        'status' => $_POST['status'],
    );

    $status = $status_controller->set($new_status);

    $template = '
        <div class="container">
            <p class="item add">Status <b>%s</b> saved</p>
        </div>
        <script>
            window.onload = function(){
                reloadPage("status");
            }
        </script>
    ';

    printf($template, $_POST['status']);

    
	unset(
		$_POST['status_id'],
		$_POST['status'],
		$_POST['status_name'],
		$_POST['r'],
	);

}else{
    $controller = new ViewController();
    $controller->load_view('error401');
}
