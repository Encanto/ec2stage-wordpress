<?php
	$consumerKey    = '0v8KPM7tyOZ4PjwNy0qQ';
	$consumerSecret = 'uUBaCJ6exL14W9I9RsDlFW6YmDK5ylGXShfaXFaphg';
	$oAuthToken     = '8557042-WeMEK8TgErJAJ6uuTAxhQRQbNSmCyDLe8MN4iE2d8N';
	$oAuthSecret    = 'w3GmJtUpoydFWkpAV9msmJfu7ABYFMPVkXWZNNZhAM';
	$status = rawurlencode('Rick Is Testing Again');
	$fields = "status=" . $status;
	$fields_count = 1;
	$oauth_hash = 'oauth_consumer_key=' . $consumerKey . '&oauth_nonce=' . time() . '&oauth_signature_method=HMAC-SHA1&oauth_timestamp=' . time() . '&oauth_token=' . $oAuthToken . '&oauth_version=1.0';
	$base = 'POST&' . rawurlencode("https://api.twitter.com/1.1/statuses/update.json") . '&' . rawurlencode($oauth_hash) . '%26status%3D' . rawurlencode($status);
	$key = rawurlencode($consumerSecret) . '&' . rawurlencode($oAuthSecret);
	$signature = base64_encode(hash_hmac("sha1", $base, $key, true));
	$signature = rawurlencode($signature);
	$oauth_header = 'oauth_consumer_key="' . $consumerKey . '", oauth_nonce="' . time() . '", oauth_signature="' . $signature . '", oauth_signature_method="HMAC-SHA1", oauth_timestamp="' . time() . '", oauth_token="' . $oAuthToken . '", oauth_version="1.0"';
	$curl_header = array("Authorization: Oauth " . $oauth_header);
	$curl_request = curl_init();
	curl_setopt($curl_request, CURLOPT_HTTPHEADER, $curl_header);
	curl_setopt($curl_request, CURLOPT_HEADER, false);
	curl_setopt($curl_request, CURLOPT_URL, 'https://api.twitter.com/1.1/statuses/update.json');
	curl_setopt($curl_request, CURLOPT_POST, $fields_count);
	curl_setopt($curl_request, CURLOPT_POSTFIELDS, $fields);
	curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, false);
	$json = curl_exec($curl_request);
	//var_dump(json_decode($json));
	curl_close($curl_request);
?>