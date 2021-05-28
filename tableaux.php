<?php
session_start();
$users = 
[
    [
        'name' => 'marc',
        'Color' => 'vert',
        'Age' => 43,
    ],

    [
        'name' => 'genevieve',
        'Color' => 'bleu',
        'Age' => 76
    ],

    [
        'name' => 'oscar',
        'Color' => 'pourpre',
        'Age' => 94
    ]
    
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>

<body>

    <?php
        include "header.php";
    ?>

    <table>
       <tr>
            <th>Prénom: </th>
            <th>Couleur: </th>
            <th>Age: </th>
       </tr>
       <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['Color'] ?></td>
                <td><?= $user['Age'] ?></td>
            </tr>
       <?php endforeach ?>
    </table>  
</body>
</html>