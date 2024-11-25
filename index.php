<?php 
session_start();
require 'db.php';
$db= getDb();
$result= $db->query("select furgon.tb as tb, furgon.rsz as rsz,
 min(futar.fiz) as min, sum(futar.fiz) as sum from furgon left join futar on furgon.id=futar.furgonid group by furgon.id");
 ?>


<?php
$tb=isset($_GET['tb'])?(int)$_GET['tb']:0;
if($tb<400){
    echo "KISSEBB";
    exit;}?>





 <!DOCTYPE html>
 <html lang = "hu">
    <head>
        <title> Név: Károlyi Mihály, Neptun: QLYM8M </title>
        <link rel= "stylesheet" type = "text/css" href= "style.css">
</head>
<body>
    <h1></h1>
    <table>
        <tr>
            <th>Rendszám</th>
            <th>Fizetések összege</th>
            <th>Legkisebb fizetés</th>
            <?php while($row=$result->fetchObject()): ?>
                <tr>
                    <td><?=$row->rsz ?></td>
                    <td><?=$row->sum ?></td>
                    <td><?=$row->min ?></td>

            </tr>
            <?php endwhile ?>
            </tr> 
            </table>
            </body>
            </html>


