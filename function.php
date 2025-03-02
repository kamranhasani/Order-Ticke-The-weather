<?php

session_start();
    function clear($value)
    {

        $value = trim($value);
        $value = strip_tags($value);
        $value = stripcslashes($value);
        $value = htmlspecialchars($value);
       
        return $value;

    }
    

    function token_file()
    
    {

        $number = base64_encode( openssl_random_pseudo_bytes(32));
       
        return $number;

    }


    function token_check($value)
    {

        if(isset($_SESSION['token']) && !empty($_SESSION['token']) && $_SESSION['token']==$value){

           unset($_SESSION['token']);

         return true;

        }

         else{

            return false;
         }

    }


    function write_file($one,$name, $phone,$from,$to,$deparure,$return,$trip)  {
	
        $file_handle = fopen($one, 'a+');

        fwrite($file_handle, '----------------------------------');

        fwrite($file_handle, "\n");

        fwrite($file_handle, 'username ='.$name );
        
        fwrite($file_handle, "\n");
        
        fwrite($file_handle, 'userphone ='.$phone);
        
        fwrite($file_handle, "\n");
        
        fwrite($file_handle, 'from ='.$from);

        fwrite($file_handle, "\n");
        
        fwrite($file_handle, 'to ='.$to);

        fwrite($file_handle, "\n");
        
        fwrite($file_handle, 'deparure ='.$deparure);

        fwrite($file_handle, "\n");
        
        fwrite($file_handle, 'return ='.$return);

        fwrite($file_handle, "\n");
        
        fwrite($file_handle, 'trip ='.$trip);

        fwrite($file_handle, "\n");

        fwrite($file_handle, '----------------------------------');


        $file=fclose($file_handle); 
        
        if($file){

            return true;

        }else{

            return false;
         }

        }
        
        
        function curl($url){
            
            $client = curl_init(); 
            curl_setopt($client, CURLOPT_URL, $url);
            curl_setopt($client,CURLOPT_RETURNTRANSFER,true); 
            $response = curl_exec($client); 
            curl_close($client);
            return  json_decode($response);
          
          }


?>