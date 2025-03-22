<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/styleLayouts.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>CryptoInvestment App</title>
</head>
<body>
    <!-- header -->
    <?php require_once "views/layouts/header.php"; ?>
    
    <?php   if (!empty($data)) {  ?>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Logo</th>
                        <th>Nombre</th>
                        <th>Símbolo</th>
                        <th>Descripción</th>
                        <th>Página Oficial</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data->data as $index => $crypto) {  
                        //   foreach ($crypto1 as $key => $crypto) { ?>   

                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td> <img src="<?= $crypto->logo ?>" alt="logo"> </td>
                            <td><?= $crypto->name ?></td>
                            <td><?= $crypto->symbol ?></td>
                            <td><?= $crypto->description ?></td>
                            <td><a href="<?= $crypto->urls->website[0] ?>" target="_blank"><?= $crypto->urls->website[0] ?></a></td>
                            <td>
                                <form action="<?php echo constant('URL');?>home/saveCurrency" method="POST">
                                    <input type="hidden" name="id" value="<?= $crypto->id ?>">
                                    <input type="hidden" name="name" value="<?= $crypto->name ?>">
                                    <input type="hidden" name="symbol" value="<?= $crypto->symbol ?>">
                                    <input type="hidden" name="description" value="<?= $crypto->description ?>">
                                    <input type="hidden" name="logo" value="<?= $crypto->logo ?>">
                                    <input type="hidden" name="website" value="<?= $crypto->urls->website[0] ?>">
                                    <button type="submit">Guardar</button>
                                </form>
                            </td>
                        </tr>
                    <?php /*}*/ } ?>
                </tbody>
            </table>
        </div>
    <?php }?>

    <div>
        <?php //require_once "views/home/miFavoriteCripto.php"; ?>
    </div>

    <div>
        <h3>📊 Gráfico de Historial de Precios (Bitcoin)</h3>
        <canvas id="cryptoChart"></canvas>
    </div>

    <div>
        <h3>🚀 Última actualización: <span id="lastUpdated"><?= date('Y-m-d H:i:s') ?></span></h3>
    </div>

    <!-- footer -->
    <?php require_once "views/layouts/footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/reload.js"></script>
</body>
</html>
