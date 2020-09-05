<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleTest.css">
    <title>Document</title>
</head>
<body>
<table>

<?php for($i = 1; $i <= 10; $i++): ?>
    

    <tr>

        <?php for($j = 1; $j <= 5; $j++): ?>

            <td> 
                <?php $test = $i * $j; ?>
                <?php if(preg_match('#1#', strval($i) . ' * ' . strval($j) . ' = ' . strval($test))): ?>
                    <?php $red = preg_replace('#1#', '<span class="red">1</span>', strval($i) . ' * ' . strval($j) . ' = ' . strval($test)) ?>
                    <?php if(preg_match('#2#', $red)): ?>
                        <?php $greenRed = preg_replace('#2#', '<span class="green">2</span>', $red) ?>
                        <?php if(preg_match('#3#', $greenRed)): ?>
                            <?php $greenRedYellow = preg_replace('#3#', '<span class="yellow">3</span>', $greenRed) ?>
                            <?php if(preg_match('#4#', $greenRedYellow)): ?>
                                <?= preg_replace('#4#', '<span class="blue">4</span>', $greenRedYellow) ?>
                            <?php else: ?>
                            <?= $greenRedYellow ?>
                            <?php endif ?>
                            <?php elseif(preg_match('#4#', $greenRed)): ?>
                            <?= preg_replace('#4#', '<span class="blue">4</span>', $greenRed) ?>
                        <?php else: ?>
                            <?= $greenRed ?>
                            <?php endif ?>
                    <?php elseif(preg_match('#3#', $red)): ?>
                        <?php $redYellow = preg_replace('#3#', '<span class="yellow">3</span>', $red) ?>
                        <?= $redYellow ?>
                    <?php elseif(preg_match('#4#', $red)): ?>
                        <?php $redBlue = preg_replace('#4#', '<span class="blue">4</span>', $red) ?>
                        <?= $redBlue ?>
                    <?php else: ?>
                    <?= $red ?>
                    <?php endif ?>
                <?php elseif(preg_match('#2#', strval($i) . ' * ' . strval($j) . ' = ' . strval($test))): ?>
                    <?php $green = preg_replace('#2#', '<span class="green">2</span>', strval($i) . ' * ' . strval($j) . ' = ' . strval($test)) ?>
                        
                    <?php if(preg_match('#3#', $green)): ?>
                        <?php $greenYellow = preg_replace('#3#', '<span class="yellow">3</span>', $green) ?>
                        <?php if(preg_match('#4#', $greenYellow)): ?>
                            <?= preg_replace('#4#', '<span class="blue">4</span>', $greenYellow) ?>
                        <?php else: ?>
                        <?= $greenYellow ?>
                        <?php endif ?>
                    <?php elseif(preg_match('#4#', $green)): ?>
                        <?php $greenBlue = preg_replace('#4#', '<span class="blue">4</span>', $green) ?>
                        <?= $greenBlue ?>
                    <?php else: ?>
                    <?= $green ?>
                    <?php endif ?>
                    
                <?php elseif(preg_match('#3#', strval($i) . ' * ' . strval($j) . ' = ' . strval($test))): ?>
                    <?php $yellow = preg_replace('#3#', '<span class="yellow">3</span>', strval($i) . ' * ' . strval($j) . ' = ' . strval($test)) ?>
                        <?php if(preg_match('#4#', $yellow)): ?>
                        <?= preg_replace('#4#', '<span class="blue">4</span>', $yellow) ?>
                        <?php else: ?>
                        <?= $yellow ?>
                        <?php endif ?>
                <?php elseif(preg_match('#4#', strval($i) . ' * ' . strval($j) . ' = ' . strval($test))): ?>
                    <?= preg_replace('#4#', '<span class="blue">4</span>', strval($i) . ' * ' . strval($j) . ' = ' . strval($test)) ?>
                <?php else: ?>
                    <?= $i . ' * ' . $j . ' = ' . $test ?>
                <?php endif ?>
            </td>
        
        <?php endfor ?>

    </tr>


    <?php endfor ?>
<tbody> 
<?php for($i = 1; $i <= 10; $i++): ?>
    <tr>

        <?php for($j = 6; $j <= 10; $j++): ?>

            <td> 
                <?php $test = $i * $j; ?>
                <?php if(preg_match('#1#', strval($i) . ' * ' . strval($j) . ' = ' . strval($test))): ?>
                    <?php $red = preg_replace('#1#', '<span class="red">1</span>', strval($i) . ' * ' . strval($j) . ' = ' . strval($test)) ?>
                    <?php if(preg_match('#2#', $red)): ?>
                        <?php $greenRed = preg_replace('#2#', '<span class="green">2</span>', $red) ?>
                        <?php if(preg_match('#3#', $greenRed)): ?>
                            <?php $greenRedYellow = preg_replace('#3#', '<span class="yellow">3</span>', $greenRed) ?>
                            <?php if(preg_match('#4#', $greenRedYellow)): ?>
                                <?= preg_replace('#4#', '<span class="blue">4</span>', $greenRedYellow) ?>
                            <?php else: ?>
                            <?= $greenRedYellow ?>
                            <?php endif ?>
                            <?php elseif(preg_match('#4#', $greenRed)): ?>
                            <?= preg_replace('#4#', '<span class="blue">4</span>', $greenRed) ?>
                        <?php else: ?>
                            <?= $greenRed ?>
                            <?php endif ?>
                    <?php elseif(preg_match('#3#', $red)): ?>
                        <?php $redYellow = preg_replace('#3#', '<span class="yellow">3</span>', $red) ?>
                        <?= $redYellow ?>
                    <?php elseif(preg_match('#4#', $red)): ?>
                        <?php $redBlue = preg_replace('#4#', '<span class="blue">4</span>', $red) ?>
                        <?= $redBlue ?>
                    <?php else: ?>
                    <?= $red ?>
                    <?php endif ?>
                <?php elseif(preg_match('#2#', strval($i) . ' * ' . strval($j) . ' = ' . strval($test))): ?>
                    <?php $green = preg_replace('#2#', '<span class="green">2</span>', strval($i) . ' * ' . strval($j) . ' = ' . strval($test)) ?>
                        
                    <?php if(preg_match('#3#', $green)): ?>
                        <?php $greenYellow = preg_replace('#3#', '<span class="yellow">3</span>', $green) ?>
                        <?php if(preg_match('#4#', $greenYellow)): ?>
                            <?= preg_replace('#4#', '<span class="blue">4</span>', $greenYellow) ?>
                        <?php else: ?>
                        <?= $greenYellow ?>
                        <?php endif ?>
                    <?php elseif(preg_match('#4#', $green)): ?>
                        <?php $greenBlue = preg_replace('#4#', '<span class="blue">4</span>', $green) ?>
                        <?= $greenBlue ?>
                    <?php else: ?>
                    <?= $green ?>
                    <?php endif ?>
                    
                <?php elseif(preg_match('#3#', strval($i) . ' * ' . strval($j) . ' = ' . strval($test))): ?>
                    <?php $yellow = preg_replace('#3#', '<span class="yellow">3</span>', strval($i) . ' * ' . strval($j) . ' = ' . strval($test)) ?>
                        <?php if(preg_match('#4#', $yellow)): ?>
                        <?= preg_replace('#4#', '<span class="blue">4</span>', $yellow) ?>
                        <?php else: ?>
                        <?= $yellow ?>
                        <?php endif ?>
                <?php elseif(preg_match('#4#', strval($i) . ' * ' . strval($j) . ' = ' . strval($test))): ?>
                    <?= preg_replace('#4#', '<span class="blue">4</span>', strval($i) . ' * ' . strval($j) . ' = ' . strval($test)) ?>
                <?php else: ?>
                    <?= $i . ' * ' . $j . ' = ' . $test ?>
                <?php endif ?>
            </td>
<?php endfor ?>
    </tr>
<?php endfor ?>
</tbody>
</table>

</body>
</html>