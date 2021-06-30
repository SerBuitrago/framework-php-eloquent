<?php

/**
 * @class implementation class Encryption.
 * @description - Contains basic functions.
 * @autor - Sergio Stives Barrios Buitrago.
 * @mail - sergiobuitrago54@gmail.com - sergiostivesbb@ufps.edu.co.
 * @phone - 3118938189 - 3114794520.
 */
class Encryption
{

    private $method;
    private $iv;

    //////////////////////////////////////////////////////
    // Construct
    //////////////////////////////////////////////////////
    public function __construct()
    {
        $this->method = ROOT_APP_ENCRYPTION_METHOD;
        $this->iv = base64_decode(ROOT_APP_ENCRYPTION_BASE);
    }

    //////////////////////////////////////////////////////  
    // Method
    //////////////////////////////////////////////////////
    /**
     * Method that allows encryption.
     */
    public function getEncrypt($value)
    {
        return openssl_encrypt($value, $this->method, $value, false, $this->iv);
    }

    /**
     * Method that allows decryption.
     */
    public function getDecrypt($value)
    {
        $encrypted_data = base64_decode($value);
        return openssl_decrypt($value, $this->method, $value, false, $this->iv);
    }

    /**
     * Method that allows changing the encryption method.
     */
    public function getIv($method)
    {
        return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)));
    }
}
