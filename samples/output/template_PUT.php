php
<?php
// Modify : 
$mj = new Mailjet($MJ_APIKEY_PUBLIC,$MJ_APIKEY_PRIVATE);
$params = array(
	"method" => "PUT",
	"ID" => "$ID",
	"Author" => "",
	"Categories" => "",
	"Copyright" => "",
	"Description" => "",
	"EditMode" => "",
	"IsStarred" => "false",
	"Presets" => "",
	"Purposes" => ""
);
$result = $mj->template($params);
if ($mj->_response_code == 201){
   echo "success";
   var_dump($result);
} else {
   echo "error - ".$mj->_response_code;
   var_dump($mj->_response);
}
?>
