<div class="graphicstable">

    <h3>📊 Price history chart (Bitcoin)</h3>
    <canvas id="cryptoChart"></canvas>
    
    <?php
        // Convertir a JSON y pasarlo a JavaScript
        echo "<script>var criptosData = " . json_encode($data->data) . ";</script>";
    ?>
</div>