<?php

require_once "./db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
    <body class="bg-dark text-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">I miei Film</h1>
            <div class="row g-4">
                <?php foreach ($movies as $movie) { ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-secondary text-white">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie->getTitle(); ?></h5>
                                <h6 class="card-subtitle mb-2 text-warning">
                                    Anno: <?php echo $movie->getYear(); ?> | 
                                    Rating: <?php echo $movie->getRating() ?? 'N/D'; ?>/5
                                </h6>
                                <p class="card-text"><?php echo $movie->getDescription(); ?></p>
                            </div>
                            <div class="card-footer">
                                <?php foreach ($movie->getGenre() as $genre) { ?>
                                    <span class="badge bg-info text-dark"><?php echo $genre->getName(); ?></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>