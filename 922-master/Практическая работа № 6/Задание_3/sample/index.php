<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include "track.php";
$id = 6;
fnOutTrack($track, $id);

function fnOutTrack($track, $id_album) {

    $out = '<table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>трека</th>
            <th>Название трека</th>
            <th>Примечание</th>
            <th>Альбом</th>
        </tr>';

    $found = false;
    foreach($track as $item) {
        if($item['id_album'] == $id_album) {
            $found = true;
            $out .= "<tr>
                <td>{$item['id_track']}</td>
                <td>{$item['id_track']}</td>
                <td>{$item['name']}</td>
                <td>{$item['note']}</td>
                <td>{$item['id_album']}</td>
            </tr>";
        }
    }

    if (!$found) {
        $out .= '<tr><td colspan="5">Нет треков для этого альбома</td></tr>';
    }

    $out .= '</table>';
    echo $out;
}

?>
</body>
</html>