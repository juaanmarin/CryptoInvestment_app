<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/styleLayouts.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/home.css">
    <title>CryptoInvestment App</title>
</head>
<body>
    <!-- header -->
    <?php require_once "views/layouts/header.php"; ?>
    
    <!-- section -->
    <?php 
        if(!empty($data) && $data->view == 'search') {  
            require_once "views/home/partials/section_searchCripto.php";
        }

        if (!empty($data) && $data->view == 'favorites') {
            require_once "views/home/partials/section_FavoriteCripto.php";
            require_once "views/home/partials/section_graphics.php";
        }else {
            echo '<h2> You dont have any cryptocurrencies in your favorites yet. </h2>';
        }
    ?>




 

    <!-- footer -->
    <?php require_once "views/layouts/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="public/js/graphics.js"></script>
    <script src="public/js/reload.js"></script>
</body>
</html>
