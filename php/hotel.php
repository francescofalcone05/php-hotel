<?php
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => '0.4 Km'
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => '2 Km'
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => '1 Km'
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => '5.5 Km'
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => '50 Km'
    ],

    //  $a = 0
    // while ($a <= count($hotels)) {
    //  if ($hotels[$a][2] == 'false'){
    //     $hotels[$a][2] = 'si' ;
    //     };
    //  $a++

    // };

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP Hotels</title>
</head>

<body>

    <div class="container">

        <h1>Hotels</h1>

        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Parking</th>
                <th>Vote</th>
                <th>Distance to center</th>
            </tr>

            <?php foreach ($hotels as $hotel) { ?>
                <tr>
                    <?php foreach ($hotel as $key => $value) {  ?>
                        <td> <?= $value ?> </td>
                    <?php } ?>
                </tr>
            <?php } ?>

        </table>

    </div>

</body>

</html>