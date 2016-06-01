// Setup variables
$key = ''; // TODO: replace with your own
$secret = ''; // TODO: replace with your own
$productId = ''; // TODO: replace with your own
$licenseKeyToCheck = ''; // TODO: replace with your own

// Perform check
$url = 'https://' . $key . ':' . $secret . '@www.sendowl.com/api/v1/products/' . $productId . '/licenses/check_valid?key=' . $licenseKeyToCheck;
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Accept: text/xml' ) ); // for json use: 'Accept: application/json'
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
$output = curl_exec( $ch );
curl_close($ch);
echo $output;