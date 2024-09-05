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

    //var_dump($hotels); //dump della variabile per controllare che tutto proceda bene. 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean Hotels</title>
</head>
<body>

    <div>

        <h1>Boolean Hotels</h1>
        <!-- utilizzo forech per ciclare l'arry e popolare il dom con delle liste -->
        <?php foreach($hotels as $hotel){ ?>
            <div>
                <ul>
                    <li>
                        <span>Nome: </span><?php echo $hotel['name']; ?>
                    </li>
                    <li>
                        <span>Descrizione: </span><?php echo $hotel['description']; ?>
                    </li>
                    <li>
                        <span>Parcheggio: </span><?php echo $hotel['parking'] ? "Parcheggio disponibile in struttura" : 'Parcheggio non disponibile '; ?>
                    </li>
                    <li>
                        <span>voto: </span><?php echo $hotel['vote']; ?>
                    </li>
                    <li>
                        <span>Distanza dal centro: </span><?php echo $hotel['distance_to_center']; ?>
                    </li>
                </ul>
            </div>
        <?php } ?>
    </div>

</body>
</html>