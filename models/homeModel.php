<?php 

    class HomeModel extends Model{
        
        function __contruct(){
            parent::__construct();
        }

        // metodo que permite hacer las peticiones a la Api Coinmakercap
        public function apiRequest($endPoint, $parameters) {
            $url = constant("URL_API").$endPoint;

            $headers = [
                'Accepts: application/json',
                'X-CMC_PRO_API_KEY:'.constant("KEY_API")

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
           
            curl_close($curl); // Close request
            return json_decode($response);
        }

        // guarda las criptomonedas favoritas 
        public function saveCurrency($id, $name, $symbol, $description, $logo, $website){
            try{
                $query = $this->prepare('INSERT INTO favorite_cryptos (id, name, symbol, description, logo, website) VALUES(:id, :name, :symbol, :description, :logo, :website)');
                $query->execute([
                    'id' => $id,
                    'name' => $name,
                    'symbol' => $symbol,
                    'description' => $description,
                    'logo' => $logo,
                    'website' => $website
                ]);
                return true;
            }catch(PDOException $e){
                error_log('USERMODEL::save->PDOExeption '.$e);
                return false;
            }
        }

        // para consultar las criptomonedas favoritas
        public function getAllCurrentcy(){

            try{
                $query = $this->query('SELECT * FROM favorite_cryptos');
                $items = $query->fetchAll(PDO::FETCH_ASSOC);
                
                return $items;

            }catch(PDOException $e){
                error_log('USERMODEL::getAll->PDOExeption '.$e);
            }
        }

        
    }

?>