function cryptorates_shortcode() {
	
	$serverurl = '*Enter your Base Server URL Here*';
	$storeID = '*Enter your store ID here*';
	$localcurrency = '*Enter your local currency, such as "USD", or "CAD"*';
	
	$introtext = 'Current Exchange Rate: ';
	echo $introtext;
	
	//BTC Bitcoin
	
	//Set Crypto Ticket (BTC = Bitcoin, LTC = Litecoin, DOGE = Dogecoin, DASH = Dash, etc...)
	$cryptocode = "BTC";
		
	$json_output = file_get_contents($serverurl . '/api/rates?currencyPairs=' . $cryptocode . '_' . $localcurrency . '&storeId=' . $storeID);
	$obj_result = JSON_decode($json_output, true);

	foreach($obj_result as $row) {
		if($row['code'] == $localcurrency){
			echo "1 " . $cryptocode . " = ";
			$currencyrate = $row['rate'];
			$currencyrate = number_format($currencyrate, 2, '.', '');
			echo $currencyrate . ' ' . $localcurrency . ' | ';
			break;
		}
	}	
	
	//LTC Litecoin
	$cryptocode = "LTC";
	
	$json_output = file_get_contents($serverurl . '/api/rates?currencyPairs=' . $cryptocode . '_' . $localcurrency . '&storeId=' . $storeID);
	$obj_result = JSON_decode($json_output, true);

	foreach($obj_result as $row) {
		if($row['code'] == $localcurrency){
			echo "1 " . $cryptocode . " = ";
			$currencyrate = $row['rate'];
			$currencyrate = number_format($currencyrate, 2, '.', '');
			echo $currencyrate . ' ' . $localcurrency . ' | ';
			break;
		}
	}
	
	//DOGE Dogecoin
	$cryptocode = "DOGE";

	$json_output = file_get_contents($serverurl . '/api/rates?currencyPairs=' . $cryptocode . '_' . $localcurrency . '&storeId=' . $storeID);
	$obj_result = JSON_decode($json_output, true);

	foreach($obj_result as $row) {
		if($row['code'] == $localcurrency){
			echo "1 " . $cryptocode . " = ";
			$currencyrate = $row['rate'];
			$currencyrate = number_format($currencyrate, 2, '.', '');
			echo $currencyrate . ' ' . $localcurrency . ' | ';
			break;
		}
	}

	//DASH Dash
	$cryptocode = "DASH";

	$json_output = file_get_contents($serverurl . '/api/rates?currencyPairs=' . $cryptocode . '_' . $localcurrency . '&storeId=' . $storeID);
	$obj_result = JSON_decode($json_output, true);

	foreach($obj_result as $row) {
		if($row['code'] == $localcurrency){
			echo "1 " . $cryptocode . " = ";
			$currencyrate = $row['rate'];
			$currencyrate = number_format($currencyrate, 2, '.', '');
			echo $currencyrate . ' ' . $localcurrency . ' | ';
			break;
		}
	}
}
add_shortcode( 'crypto_rates', 'cryptorates_shortcode' );
