<?php
print('<h2>Status</h2><br>');
print('<h2 class="p1">Manage your Status</h2>');

$status_controller = new StatusController();
$status = $status_controller->get();

if (empty($status)) {
    print('
        <div class="container">
                <p class="item error">No hay Status</p>
        </div>
    ');

} else {

    $template_status = '
    <div class="item">
        <table class="">
            <tr>
                <th>Status_id</th>
                <th>Status</th>
                <th colspan="2">
                    <form method="post" action="">
                        <input type="text" hidden name="r" value="status_add">
                        <input class="button add" type="submit" value="Add">
                    </form>
                </th>
            </tr>';

    for ($i = 0; $i < count($status); $i++) {

        $template_status .= '
            <tr>
                <td>'.$status[$i]['status_id'].'</td>
                <td>'.$status[$i]['status'].'</td>
                <td>
                    <form method="post" action="">
                        <input type="hidden" name="r" value="status_edit">
                        <input type="hidden" name="status_id" value="'.$status[$i]['status_id'].'">
                        <input class="button edit" type="submit" value="Edit">
                    </form>
                </td>

                <td>
                    <form method="post" action="">
                        <input type="hidden" name="r" value="status_delete">
                        <input type="hidden" name="status_id" value="'.$status[$i]['status_id'].'">
                        <input type="hidden" name="status_name" value="'.$status[$i]['status'].'">
                        <input class="button delete" type="submit" value="Delete">
                    </form>
                </td>
            
            </tr>
        ';
    }

    $template_status .='
        </table>
    </div>
    ';

    print($template_status);
}
