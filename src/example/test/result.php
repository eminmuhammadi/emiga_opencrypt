<?php 
if(!empty( 

	($_GET['type']) 	  && 
	($_GET['algo']) 	  && 
	($_GET['text']) 	  && 
	($_GET['pkey'])       &&
	($_GET['skey'])		  &&
	($_GET['route'])	
		))  
{
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/example/test/opencrypt_emiga.php');

$do = opencrypt_emiga( $text , $type );
echo $do;

}


else{ echo "Nothing here"; }

?>