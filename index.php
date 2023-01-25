<!DOCTYPE html>

<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotel</title>
    </head>
    <body>
        <main>
            <table border="1">
                <thead>
                    <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            foreach ($hotels as $key => $hotel) {
                                if ($hotel['parking']) {
                                    $parking = 'sì';
                                } else {
                                    $parking = 'no';
                                }

                                echo
                                    "<tr>
                                        <td>{$hotel['name']}</td>
                                        <td>{$hotel['description']}</td>
                                        <td>$parking</td>
                                        <td>{$hotel['vote']} stelle</td>
                                        <td>{$hotel['distance_to_center']} metri</td>
                                    </tr>";
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
        </main>
    </body>
</html>