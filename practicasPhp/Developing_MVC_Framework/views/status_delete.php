<h2>Status edit</h2>

<?php
$status_controller = new StatusController();

if ($_POST['r'] == 'status_delete' && $_SESSION['role'] == 'Admin' && !isset($_POST['crud'])) {

	//This variable 'status' will be used check if exist a record with the id sent
	$status = $status_controller->get($_POST['status_id']);

	if (empty($status)) { //Checking
		$template = '
        <div class="container">
            <p class="item delete">No existe el status_id <b>%s</b></p>
        </div>
        <script>
            window.onload = function(){
                reloadPage("status");
            }
        </script>
    ';
		printf($template, $_POST['status_id']);
	} else {
		//Field in disabled won't pass through the post. They are disabled
		$template = '
        <form method="POST">
			<div class="p1 f2">
				Are sure you want to delete the status: <b>%s</b>?
			</div>

			<div>
				<input type="submit" class="button delete" value="Yes">
				<input type="submit" class="button delete" value="No" onclick="history.back()">

				<input type="hidden" name="status_id" class="button delete" value="%s">
				<input type="hidden" name="status_name" value="%s">
				<input type="hidden" name="r" value="status_delete">
				<input type="hidden" name="crud" value="delete">
			</div>
		</form>';

		printf(
			$template,
			$status[0]['status'],
			$status[0]['status_id'],
			$status[0]['status'],
		);
	}
} elseif ($_POST['r'] == 'status_delete' && $_SESSION['role'] == 'Admin' && $_POST['crud'] == 'delete') {


	$status_controller->delete($_POST['status_id']);
	$template = '
    <div class="container">
        <p class="item delete">Status <b>%s</b> deleted successfully</p>
    </div>
    <script>
        window.onload = function(){
            reloadPage("status");
        }
    </script>
';

	printf($template, $_POST['status_name']);

	unset(
		$_POST['status'],
		$_POST['status_id'],
		$_POST['r'],
	);
} else {

	$controller = new ViewController();
	$controller->load_view('error401');
}
