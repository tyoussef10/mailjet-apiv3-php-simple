php
<?php
// Create : Manage your contact lists. One Contact might be associated to one or more ContactsList.
$mj = new Mailjet($MJ_APIKEY_PUBLIC,$MJ_APIKEY_PRIVATE);
$params = array(
	"method" => "POST",
	"ID" => "$ID",
	"Address" => "",
	"CreatedAt" => "",
	"ID" => "",
	"IsDeleted" => "false",
	"Name" => "myList",
	"SubscriberCount" => ""
);
$result = $mj->contactslistImportList($params);
if ($mj->_response_code == 201){
   echo "success";
   var_dump($result);
} else {
   echo "error - ".$mj->_response_code;
   var_dump($mj->_response);
}
?>
