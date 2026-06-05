<?php

function fnGetTeamName($pteam, $id) {
    foreach ($pteam as $row) {
        if ($row['id_team'] == $id) {
            return $row['name'];
        }
    }
    return "Неизвестно";
}

function fnOutAlbum($palbum, $pteam) {
    $tr = "";
    foreach ($palbum as $item) {
        $name = fnGetTeamName($pteam, $item['id_team']);
        $tr .= "<tr>
            <td>{$item['id_album']}</td>
            <td>{$item['title']}</td>
            <td>{$item['date']}</td>
            <td>{$item['country']}</td>
            <td>{$name}</td>
        </tr>";
    }
    $out = "<table border=1 cellpadding=5>
        <tr>
            <th>ID</th>
            <th>Альбом</th>
            <th>Дата выпуска</th>
            <th>Страна</th>
            <th>Наименование группы</th>
        </tr>
        {$tr}
    </table>";
    return $out;
}
?>