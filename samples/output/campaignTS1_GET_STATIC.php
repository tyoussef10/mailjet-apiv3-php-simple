php
<?php
// View : Historical view of sent emails, both transactional and marketing. Each e-mail going through Mailjet is attached to a Campaign. This object is automatically generated by Mailjet.
$mj = new Mailjet();
$params = array(
    "method" => "GET",
);
$result = $mj->a($params);
if ($mj->_response_code == 200)
   echo "success - email sent";
else
   echo "error - ".$mj->_response_code;
var_dump(result);
?>
