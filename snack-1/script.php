<?php

$games = [
    [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Cantù', 
        'punti_casa' => 55, 
        'punti_ospite' => 60
    ],

    [
        'casa' => 'Roma',
        'ospite' => 'Firenze',
        'punti_casa' => 72,
        'punti_ospite' => 68
    ],

    [
        'casa' => 'Napoli',
        'ospite' => 'Bologna',
        'punti_casa' => 88,
        'punti_ospite' => 78
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($games as $game): ?>
        <div>
            <?php echo $game['casa'] . ' - ' . $game['ospite'] . ' | ' . $game['punti_casa'] . '-' . $game['punti_ospite']; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>
    
