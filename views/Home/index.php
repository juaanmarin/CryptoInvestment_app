


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styleLayouts.css">
    <link rel="stylesheet" href="public/css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>CryptoInvestment App</title>
</head>
<body>
    <!-- header -->
    <?php require_once "views/layouts/header.php"; ?>
    
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Símbolo</th>
                    <th>Precio (USD)</th>
                    <th>Volumen 24h</th>
                    <th>% 1h</th>
                    <th>% 24h</th>
                    <th>% 7d</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data->data as $index => $crypto) { ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $crypto->name ?></td>
                        <td><?= $crypto->symbol ?></td>
                        <td>$<?= number_format($crypto->quote->USD->price, 2) ?></td>
                        <td>$<?= number_format($crypto->quote->USD->volume_24h, 2) ?></td>
                        <td style="color: <?= $crypto->quote->USD->percent_change_1h >= 0 ? 'green' : 'red' ?>;">
                            <?= number_format($crypto->quote->USD->percent_change_1h, 2) ?>%
                        </td>
                        <td style="color: <?= $crypto->quote->USD->percent_change_24h >= 0 ? 'green' : 'red' ?>;">
                            <?= number_format($crypto->quote->USD->percent_change_24h, 2) ?>%
                        </td>
                        <td style="color: <?= $crypto->quote->USD->percent_change_7d >= 0 ? 'green' : 'red' ?>;">
                            <?= number_format($crypto->quote->USD->percent_change_7d, 2) ?>%
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
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
