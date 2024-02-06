<html>
    <head>
        <style>
            audio::-webkit-media-controls-panel{
                border-radius: 0px;
                background-color: skyblue;
            }
        </style>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Slider with Online Loaded Image</title>
  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    

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

    <table>
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
                    <audio id="player" controls src="<?php echo $data['location']; ?>" type="mp3/audio"></audio>
                    
                </td>
                <td><?php echo $data['size']; ?></td>
            </tr>
        <?php
    }
?>

</table>


<div
    style="
        width: 100%;
        height: content-fit;
        position: fixed;
        bottom: 0px;
        left: 0px;
        background-color: rgba(34, 55, 222, .8);
    ";
>
    <div>
        <button onclick="document.getElementById('player').play()">Play</button>
        <button onclick="document.getElementById('player').pause()">Pause</button>
        <button onclick="document.getElementById('player').muted=!document.getElementById('player').muted">Mute/ Unmute</button>
    </div>



</div>

</body>
</html>