<?php

    class Home extends controller{

        function __construct(){
            parent::__construct();
        }

        //se llama el metodo render de la clase view para cargar una vista
        function render(){
            $data = $this->favoriteCripto();
            $this->view->render('home/index', $data);
        }

        // para buscar criptomonedas por nombre
        public function searchCurrency(){
            if( $this->existPOST(['namecurrency']) ){
                $namecurrency = trim($this->getPost('namecurrency'));
                $data = [];
               

                if ($namecurrency != '' || !empty($namecurrency)) {
  
                    $endPoint = 'v2/cryptocurrency/info';
                    $parameters = [
                        'symbol' => $namecurrency,
                        'skip_invalid' => 'true'
                    ];
    
                    $data = $this->model->apiRequest($endPoint, $parameters);
                    $data->view = 'search'; //se utiliza para saber en que parte de la vista se debe cargar
                }else {
                    $this->redirect('', '');
                }
 
                $this->view->render('home/index', $data);
    
            }else{
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
                $this->redirect('', '');

            }else{
                error_log('Login::authenticate() error with params');
                $this->redirect('', '');
            }
        }

        // para buscar informacion de las criptomnedas favoritas
        public function favoriteCripto(){
            
            $favoriteCriptos = $this->model->getAllCurrentcy();
            $data = [];

            if (count($favoriteCriptos) >= 1) {
                $ids = array_column($favoriteCriptos, 'id'); // Extrae solo los ID en el array
                $paramId = implode(',', $ids); // Une los valores con una coma
    
                $endPoint = 'v2/cryptocurrency/quotes/latest';
                $parameters = [
                    'id' => $paramId,
                ];
    
                $data = $this->model->apiRequest($endPoint, $parameters);
                $data->view = 'favorites'; //se utiliza para saber en que parte de la vista se debe cargar
            }
            
            return $data;
    
        }

    }

?>