<h2>favorite</h2>

<?php if (!empty($data)) { ?>
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
<?php }?>