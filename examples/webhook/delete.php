<?php
require_once('../../lib/Laposta.php');
Laposta::setApiKey("JdMtbsMq2jqJdQZD9AHC");

// initialize webhook with list_id
$webhook = new Laposta_Webhook("BaImMu3JZA");

try {
	// (permanently) delete webhook, use webhook_id as argument
	// $result will contain een array with the response from the server
	$result = $webhook->delete("iH52rJwguo");
	print '<pre>';print_r($result);print '</pre>';

} catch (Exception $e) {

	// you can use the information in $e to react to the exception
	print '<pre>';print_r($e);print '</pre>';
}
?>
