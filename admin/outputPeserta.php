<?php 
require_once("../conn.php");

$output = "";

if(isset($_POST['export'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM peserta_event WHERE id_event='$id'";
    $sql = mysqli_query($conn, $sql);

    if(mysqli_num_rows($sql) > 0) {
        $i = 1;
        $output .= '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peserta</th>
                    <th>No Telp</th>
                    <th>Email</th>

                </tr>
            </thead>
            <tbody>';
        while($row = mysqli_fetch_array($sql)) {
            
            $output .= '<tr>
            <td>'. $i .'</td>
            <td>'. $row['nama'].'</td>
            <td>'. $row['no_telp'] .'</td>
            <td>'. $row['email'].'</td>
        </tr>';
            $i++;
        }

        $output .= '</tbody>
        </table>';

        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=report.xls');

        echo $output;

        
    } else {
        echo "tidak ada data";
    }
}
?>