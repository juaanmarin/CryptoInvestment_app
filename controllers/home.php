<?php

    class Home extends controller{

        function __construct(){
            parent::__construct();
        }

        //se llama el metodo render de la clase view para cargar una vista
        function render(){
            $data = $this->searchData();
            $this->view->render('home/index', $data);
        }

        public function searchData()
        {
            $url = 'https://sandbox-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
            // $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
            $parameters = [
                'start' => '1',
                'limit' => '100',
                'convert' => 'USD'
            ];

            $headers = [
                'Accepts: application/json',
                'X-CMC_PRO_API_KEY: b54bcf4d-1bca-4e8e-9a24-22ff2c3d462c'
                // 'X-CMC_PRO_API_KEY: dffd909c-5dbe-4919-8762-ec63f2730e64',
            ];
            $qs = http_build_query($parameters); // query string encode the parameters
            $request = "{$url}?{$qs}"; // create the request URL

            $curl = curl_init(); // Get cURL resource
            // Set cURL options
            curl_setopt_array($curl, array(
                CURLOPT_URL => $request,            // set the request URL
                CURLOPT_HTTPHEADER => $headers,     // set the headers 
                CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
            ));

            $response = curl_exec($curl); // Send the request, save the response
            // print_r(json_decode($response)); // print json decoded response
           
            curl_close($curl); // Close request
            return json_decode($response);
        }
    
        public function obtenerHistorico($id)
        {

        }

    }

?>