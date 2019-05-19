<?php
$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://demo.infiny.cloud/api/oauth2/access-token?grant_type=client_credentials&client_id=TUU6vwAriAWj6p1oDC9mQogLl3vnUsARuk7NWQ2e&client_secret=yQqqnif4m1Skn4N7qb5deeYRNxQY6xpgCPKk6YfX",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_HTTPHEADER => array(
		"Accept: application/vnd.cloudlx.v1+json"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  $j = (json_decode($response));
	  echo $j->access_token;
	}

?>