<?php

    class Home extends controller{

        function __construct(){
            parent::__construct();
        }

        //se llama el metodo render de la clase view para cargar una vista
        function render(){
            $data = $this->favoriteCripto();
            $this->view->render('home/index');
        }

        // para buscar criptomonedas por nombre
        public function searchCurrency(){
            if( $this->existPOST(['namecurrency']) ){
                $namecurrency = $this->getPost('namecurrency');

                $endPoint = 'v2/cryptocurrency/info';
                $parameters = [
                    'symbol' => $namecurrency,
                    'skip_invalid' => 'true'
                ];

                $data = $this->model->apiRequest($endPoint, $parameters);
                $this->view->render('home/index', $data);
    
            }else{
                // error, cargar vista con errores
                //$this->errorAtLogin('Error al procesar solicitud');
                error_log('Login::authenticate() error with params');
                $this->redirect('', '');
            }
        }

        // para guardar las criptomonedas favoritas
        public function saveCurrency() {
            if( $this->existPOST(['id', 'name', 'symbol', 'logo']) ){
                $id = $this->getPost('id');
                $name = $this->getPost('name');
                $symbol = $this->getPost('symbol');             
                $description = $this->getPost('description');
                $logo = $this->getPost('logo');
                $website = $this->getPost('website');

                $data = $this->model->saveCurrency($id, $name, $symbol, $description, $logo, $website);
                
                // $this->view->render('home/index', $data);
                $this->redirect('', '');

            }else{
                // error, cargar vista con errores
                //$this->errorAtLogin('Error al procesar solicitud');
                error_log('Login::authenticate() error with params');
                $this->redirect('', '');
            }
        }

        // para buscar informacion de las criptomnedas favoritas
        public function favoriteCripto(){
            
            $endPoint = 'v1/cryptocurrency/listings/latest';
            $parameters = [
                'start' => '1',
                'limit' => '100',
                'convert' => 'USD'
            ];

            $data = $this->model->apiRequest($endPoint, $parameters);
            return $data;
    
        }

    }

?>