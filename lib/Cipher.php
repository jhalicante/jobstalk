<?php
    // NOTE:  
    // This uses ECB mode, which isn't secure. 
    // If you want a simple solution without taking a 
    // crash course in cryptography engineering, 
    // don't write it yourself, just use a library.
    // URL : https://stackoverflow.com/questions/16600708/how-do-you-encrypt-and-decrypt-a-php-string

    class Cipher
    {
        public $algorithm = 'AES-128-ECB';
        public $key = 'ABCDE12345';

        public function encrypt( string $string )
        {
            return openssl_encrypt( $string, $this->algorithm, $this->key );
        }
        
        public function decrypt( string $string )
        {
            return openssl_decrypt( $this->encrypt($string), $this->algorithm, $this->key );
        }        
    }
    $cipher = new Cipher();
?>