<?php
$calendar = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre')
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie5</title>
</head>
<body>
  <table>
    <td><?= $calendar[0] ?></td>
    <td><?= $calendar[1] ?></td>
    <td><?= $calendar[2] ?></td>
    <td><?= $calendar[3] ?></td>
    <td><?= $calendar[4] ?></td>
    <td><?= $calendar[5] ?></td>
    <td><?= $calendar[6] ?></td>
    <td><?= str_replace('Aout', 'Août', $calendar[7]) ?></td><!-- $calendar[7] = Août-->
    <td><?= $calendar[8] ?></td>
    <td><?= $calendar[9] ?></td>
    <td><?= $calendar[10] ?></td>
    <td><?= $calendar[11] ?></td>
  </table>
</body>
</html>
