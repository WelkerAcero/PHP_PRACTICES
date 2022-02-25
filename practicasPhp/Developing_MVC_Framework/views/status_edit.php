<h2>Status edit</h2>

<?php
$status_controller = new StatusController();

if ( $_POST['r'] == 'status_edit' && $_SESSION['role'] == 'Admin' && !isset($_POST['crud']) ) {

    //This variable 'status' will be used check if exist a record with the id sent
    $status = $status_controller->get( $_POST['status_id'] );

    if (empty($status)) { //Checking
        $template = '
        <div class="container">
            <p class="item error">No existe el status_id <b>%s</b></p>
        </div>
        <script>
            window.onload = function(){
                reloadPage("status");
            }
        </script>
    ';
        printf( $template, $_POST['status_id'] );
        
    } else {
        //Field in disabled won't pass through the post. They are disabled
        $template_status = '
            <h2 class="p1">Edit Status</h2>
            <form method="POST" class="item">
            
                <div class="p_25">
                    <input type="text" value="%s" disabled required>
                    <input type="text" hidden name="status_id" value="%s"> 
                </div>

                <div class="p_25">
                    <input type="text" name="status" placeholder="status" value="%s" required>
                </div>

                <div>
                    <input type="hidden" name="r" value="status_edit">
                    <input type="hidden" name="crud" value="set">
                    <input type="submit" class="button edit" value="Edit">
                </div>
            </form>
        ';

        printf(
            $template_status,
            $status[0]['status_id'],
            $status[0]['status_id'],
            $status[0]['status'],
            );
    }

} elseif( $_POST['r'] == 'status_edit' && $_SESSION['role'] == 'Admin' && $_POST['crud'] == 'set' ){

    $status_data = array(
        'status_id' => $_POST['status_id'],
        'status' => $_POST['status']
    );

    $status_controller->update($status_data);
    $template = '
    <div class="container">
        <p class="item add">Status <b>%s</b> edited successfully</p>
    </div>
    <script>
        window.onload = function(){
            reloadPage("status");
        }
    </script>
';

printf( $template, $_POST['status'] );

unset(
    $_POST['status'],
    $_POST['status_id'],
    $_POST['r'],
);


}else{

    $controller = new ViewController();
    $controller->load_view('error401');

}
