<?php

define('URL', 'http://localhost/CryptoInvestment_app/');

// pruebas con sandbox-api
// define('URL_API', 'https://sandbox-api.coinmarketcap.com/');
// define('KEY_API', 'b54bcf4d-1bca-4e8e-9a24-22ff2c3d462c');

// Url y key para produccion
define('URL_API', 'https://pro-api.coinmarketcap.com/');
define('KEY_API', 'dffd909c-5dbe-4919-8762-ec63f2730e64');


// Globales para conectarse a la bd local
define('HOST', 'localhost:3307');
define('DB', 'cryptoinvestment_app');
define('USER', 'root');
define('PASSWORD', "nuviavelasquez07");
define('CHARSET', 'utf8mb4');

date_default_timezone_set('America/Bogota'); // Configura la zona horaria de Colombia

?>
