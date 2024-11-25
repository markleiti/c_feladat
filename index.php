<?php
 session_start();
 require 'db.php';
 $db=getDb();
 $result = $db->query("select furgon.rsz as Rendszám, sum(futar.fiz) as Fizetések_összege, min(futar.fiz) as Legkisebb_fizetés, furgon.tb as teher from furgon left join futar on furgon.id=futar.furgon_id group by furgon.id");
?>

<?php
    $tb = (int)$_GET['teher'];
    if($tb<400){
        echo "<h3>Rohadtul kisebb</h3>";
        exit;
    }
?>


<!DOCTYPE html>
<html lang="hu">
    <title>Név:..., Neptun kód:...</title>
    <table>
        <tr>
            <th>Rendszám</th>
            <th>Fizetések összege</th>
            <th>Legkisebb fizetés</th>
        </tr>
        <?php
            while($row=$result->fetchObject()):
        ?>
            <tr>
                    <td>
                        <?=$row->Rendszám?>
                    </td>
                    <td>
                        <?=$row->Fizetések_összege?>
                    </td>
                    <td>
                        <?=$row->Legkisebb_fizetés?>
                    </td>
            </tr>
            <?php
            endwhile;
        ?>
    </table>
</html>