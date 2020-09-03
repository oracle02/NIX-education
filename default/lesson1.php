<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
<table>

<?php for($i = 1; $i <= 10; $i++): ?>
    

    <tr>

        <?php for($j = 1; $j <= 5; $j++): ?>

            <td> <?= $i . ' * ' . $j . ' = ' . $i * $j?></td>
        
        <?php endfor ?>

    </tr>


    <?php endfor ?>
<tbody> 
<?php for($i = 1; $i <= 10; $i++): ?>
    <tr>

        <?php for($j = 6; $j <= 10; $j++): ?>

            <td><?= $i . ' * ' . $j . ' = ' . $i * $j?></td>
<?php endfor ?>
    </tr>
<?php endfor ?>
</tbody>
</table>


</body>
</html>