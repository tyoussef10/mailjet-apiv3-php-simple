php
<?php
// Delete : Definition of available extra data items for contacts.
$mj = new Mailjet($MJ_APIKEY_PUBLIC,$MJ_APIKEY_PRIVATE);
$params = array(
	"method" => "DELETE",
	"ID" => "$ID",
);
$result = $mj->contactmetadata($params);
if ($mj->_response_code == 204){
   echo "success";
   var_dump($result);
} else {
   echo "error - ".$mj->_response_code;
   var_dump($mj->_response);
}
?>
