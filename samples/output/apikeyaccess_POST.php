php
<?php
// Create : Access rights description on API keys for subaccounts/users.
$mj = new Mailjet($MJ_APIKEY_PUBLIC,$MJ_APIKEY_PRIVATE);
$params = array(
	"method" => "POST",
	"APIKeyID" => "",
	"User" => ""
);
$result = $mj->apikeyaccess($params);
if ($mj->_response_code == 201){
   echo "success";
   var_dump($result);
} else {
   echo "error - ".$mj->_response_code;
   var_dump($mj->_response);
}
?>
