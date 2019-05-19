<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://demo.infiny.cloud/api/services",
  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Authorization: Bearer ".$_GET['access'].""
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {

 function printValues($arr) {
    global $values;
   
    foreach($arr as $key=>$value){
        if(is_array($value)){
            printValues($value);
        } else{
            $values[] = $value;
        }
    }
    
    return array('values' => $values);
}
 

// Decode JSON data into PHP associative array format
$arr = json_decode($response, true);
 
// Call the function and print all the values
$result = printValues($arr);
echo implode(" ", $result["values"]); 




	
	
}

?>