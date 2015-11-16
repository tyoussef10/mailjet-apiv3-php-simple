php
<?php
// Modify : The preset object contains global and user defined presets (styles) independant from templates or newsletters.Access is similar to template and depends on OwnerType, Owner. No versioning is done. Presets are never referenced by their ID. The preset value is copied into the template or newsletter.
$mj = new Mailjet($MJ_APIKEY_PUBLIC,$MJ_APIKEY_PRIVATE);
$params = array(
	"method" => "PUT",
	"ID" => "$ID",
	"Author" => "",
	"Copyright" => "",
	"Description" => "",
	"OwnerID" => "",
	"Preset" => ""
);
$result = $mj->preset($params);
if ($mj->_response_code == 201){
   echo "success";
   var_dump($result);
} else {
   echo "error - ".$mj->_response_code;
   var_dump($mj->_response);
}
?>
