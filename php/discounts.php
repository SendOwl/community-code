$key = '***';
$secret = '***';
$url = 'https://' . $key . ':' . $secret . '@www.sendowl.com/api/v1_1/discounts' ;
$data = '{"discount":{"name":"My code","usage_limit":"100","minimum_cart_value":"50.00","fixed_discount":"5.0"}}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$key:$secret");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: application/json',
'Content-Type: application/json', 'Content-Length: ' . strlen($data))
);
$api_response = curl_exec($ch);
$api_response_info = curl_getinfo($ch);
print_r($api_response);
curl_close($ch);