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
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/opencrypt_emiga.php');

}


else{ echo "Nothing here"; }
?>
<?php 

$do = opencrypt_emiga( $text , $type );
echo $do;

?>