<?php
    function randomNumbers ($min, $max){
        return rand ($min, $max);
    }
    function generatePassword($length){
        $result = '';
        $password = '';
        $numbers = '0123456789';
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $symbols = '!@#$%^&*()';
    
        $baseString = $letters.$numbers.$symbols;
        
        
        if(empty($length)){
            $result = 'Nessun parametro valido inserito';
        }
        
        elseif($length < 8 || $length > 32){
            $result = 'La Lunghezza della password deve essere compresa tra 8 e 32 caratteri ';
        }
        
        else{
            while(strlen ($password) < $length ){
                $index = randomNumbers(0, strlen($baseString) - 1);
                $char = $baseString[$index];
                $password.=$char;
        
                
            }
    
            return $password;
        }
        return $result;
    }
?>