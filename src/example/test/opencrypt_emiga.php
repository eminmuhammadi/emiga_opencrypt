<?php

function opencrypt_emiga( $_text, $_type) {
	
	$type 	 =  $_GET['type'];  // decrypt  --or  encrypt
    $algo    =  $_GET['algo'];   // algorithm
	$text 	 =  $_GET['text'];  //  string
	$pkey  	 =  $_GET['pkey'];   //   public key
	$skey    =  $_GET['skey'];  //    secret chip key
	$route   =  $_GET['route']; //     route for keys


	$i = 0;
	while ($i++ < $route)
	{

    $pkey   =  md5($pkey);
	$skey   =  md5($skey);
		
	}

    $_out     = false;
    $_method  = $algo;

    $_8byte=array(
        "BF-CBC",
        "BF-CFB",
        "BF-OFB",
        "bf-cbc",
        "bf-cfb",
        "bf-ofb",
        "cast5-cbc",
        "cast5-cfb",
        "cast5-ofb",
        "BF",
        "CAST",
        "CAST-cbc",
        "bf",
        "blowfish",
        "cast",
        "cast-cbc");

    $_16byte=array(
        "AES-128-CBC",
        "AES-128-CFB",
        "AES-128-CFB1",
        "AES-128-CFB8",
        "AES-128-OFB",
        "AES-192-CFB",
        "AES-192-CFB1",
        "AES-192-OFB",
        "AES-256-CBC",
        "AES-256-CFB",
        "AES-256-CFB1",
        "AES-256-CFB8",
        "AES-256-OFB",        
        "aes-128-cbc",
        "aes-128-cfb",
        "aes-128-cfb1",
        "aes-128-cfb8",
        "aes-128-ofb",
        "aes-192-cbc",        
        "aes-192-cfb",
        "aes-192-cfb1",
        "aes-192-cfb8",
        "aes-192-ofb",
        "aes-256-cbc",
        "aes-256-cfb",
        "aes-256-cfb1",
        "aes-256-cfb8",
        "aes-256-ofb",
        "AES128",
        "AES192",
        "AES256",
        "aes128",
        "aes192",
        "aes256");

    if (in_array($_method, $_8byte)){

    $_pkey    = hash   ('sha256', $pkey );
    $_skey    = substr ( hash( 'sha256', $skey ), 0, 8 ); 

    }
    else{ 
    if (in_array($_method, $_16byte)){

    $_pkey    = hash   ('sha256', $pkey );
    $_skey    = substr ( hash( 'sha256', $skey ), 0, 16 ); 

    }
    else{  echo "Algorithm not found"; die();}
    }

    if( $_type == 'encrypt' ) {

        $_out = 
        base64_encode ( 

        		openssl_encrypt( 
        	$text, 
        	$_method,
        	$_pkey, 
        	0, 
        	$_skey

        ) );

    }
    else if( $_type == 'decrypt' ){

        $_out = openssl_decrypt( 

        		base64_decode($text), 
        	$_method, 
        	$_pkey, 
        	0, 
        	$_skey );
    }
 
    return $_out;
}



    $type =  $_GET['type'];
    $text =  $_GET['text'];

?>