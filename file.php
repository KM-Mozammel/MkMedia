<?php 

    require_once 'src/DatabaseConnection.php';
    DatabaseConnection::connect('localhost', 'darwin_cms', 'root', '');

    $dbh = DatabaseConnection::getInstance();
    $dbc = $dbh->getConnection();

    $sql = "SELECT * FROM audio";
    $stmt = $dbc->prepare($sql);
    $stmt->execute();

    $data = $stmt->fetchAll();
?>

    <table border="1">
        <th>
            <td>Name</td>
            <td>Source</td>
            <td>Size</td>
        </th>
<?php
    foreach($data as $data){

        ?>
            <tr>
                <td></td>
                <td><?php echo $data['name']; ?></td>
                <td>
                    <audio controls src="<?php echo $data['location']; ?>" type="mp3/audio"></audio>
                    
                </td>
                <td><?php echo $data['size']; ?></td>
            </tr>
        <?php
    }
?>

</table>
