php
<?php
// View : Lists a contact belong to
$mj = new Mailjet($MJ_APIKEY_PUBLIC,$MJ_APIKEY_PRIVATE);
$params = array(
	"method" => "VIEW",
	"ID" => "$ID",
);
$result = $mj->contactGetContactsLists($params);
if ($mj->_response_code == 200){
   echo "success";
   var_dump($result);
} else {
   echo "error - ".$mj->_response_code;
   var_dump($mj->_response);
}
?>
