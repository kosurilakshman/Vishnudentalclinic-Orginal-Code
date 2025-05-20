<?php
date_default_timezone_set('Asia/Calcutta');

function executework($srt)
{
	
	$db = mysqli_connect('162.214.81.24','vehiclea_vishnudental','Ramesh@465','vehiclea_vishnudentalclinic')or die(mysqli_connect_error());
	return mysqli_query($db,$srt);

}

function executeworkins($srt)
{
	// $db = mysqli_connect("localhost","root","","star_health") or die(mysqli_connect_error());
	$db = mysqli_connect('162.214.81.24','vehiclea_vishnudental','Ramesh@465','vehiclea_vishnudentalclinic')or die(mysqli_connect_error());
	$qr=mysqli_query($db,$srt);
	return mysqli_insert_id($db);
}

function redirect($url) { 

if(headers_sent()) { 

?> 
<html><head> 
<script language="javascript" type="text/javascript"> 
<!-- 
window.parent.document.location='<?php print($url);?>'; 
//--> 
</script> 
</head></html> 
<?php 
exit; 

} else { 

header("Location: ".$url); 
exit; 

} 

} 

function csrf_token_check()
{
	
	try
	{
		// Run CSRF check, on POST data, in exception mode, for 10 minutes, in one-time mode.
		NoCSRF::check( 'csrf_token', $_POST, true, 60*10, false );
		// form parsing, DB inserts, etc.
		// ...
		$result = 'Done';
		
	}
	catch ( Exception $e )
	{
		// CSRF attack detected
		$result = $e->getMessage() . ' Action ignored.';
	}
	return $result;
}

?>
