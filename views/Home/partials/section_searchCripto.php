<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Logo</th>
                <th>Nombre</th>
                <th>Símbolo</th>
                <th>Página Oficial</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data->data as $index => $crypto1) {  
                  foreach ($crypto1 as $key => $crypto) { ?>  
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td> <img src="<?= $crypto->logo ?>" alt="logo"> </td>
                    <td><?= $crypto->name ?></td>
                    <td><?= $crypto->symbol ?></td>
                    <td><a href="<?= $crypto->urls->website[0] ?>" target="_blank"><?= $crypto->urls->website[0] ?></a></td>
                    <td>
                        <form action="<?php echo constant('URL');?>home/saveCurrency" method="POST">
                            <input type="hidden" name="id" value="<?= $crypto->id ?>">
                            <input type="hidden" name="name" value="<?= $crypto->name ?>">
                            <input type="hidden" name="symbol" value="<?= $crypto->symbol ?>">
                            <input type="hidden" name="description" value="<?= $crypto->description ?>">
                            <input type="hidden" name="logo" value="<?= $crypto->logo ?>">
                            <input type="hidden" name="website" value="<?= $crypto->urls->website[0] ?>">
                            <button class = "savebtn" type="submit">Guardar</button>
                        </form>
                    </td>
                </tr>
            <?php } } ?>
        </tbody>
    </table>
</div>