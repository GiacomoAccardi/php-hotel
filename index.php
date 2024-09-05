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
    <!-- importo bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col12-sm">
                <h1 class="mt-3 mb-5 text-primary">Boolean Hotels</h1>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal centro</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php foreach($hotels as $hotel){ ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $hotel['name']; ?>
                                </th>
                                <td>
                                    <?php echo $hotel['description']; ?>
                                </td>
                                <td>
                                    <?php echo $hotel['parking'] ? "Parcheggio disponibile in struttura" : 'Parcheggio non disponibile '; ?>
                                </td>
                                <td>
                                    <?php echo $hotel['vote']; ?><span>/5</span>
                                </td>
                                <td>
                                    <?php echo $hotel['distance_to_center']; ?><span> mt</span>
                                </td>
                            </tr> 
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
</body>
</html>