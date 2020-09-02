<?php // phpcs:disable

if ( ! isset( $_POST['search_val'] ) ) {

	exit;
}

require_once 'functions.php';
	
$search_val = $_POST['search_val'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.magicthegathering.io/v1/cards/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => array('name' => $search_val,'page' => '1','pageSize' => '4'),
));

$response = curl_exec($curl);

curl_close($curl);

$results = json_decode( $response, true );

$response = array(
	'success' => false,
	'cards'   => array(),
);

if ( $results && isset( $results['cards'] ) && count( $results['cards'] ) > 0 ) {

	$cards = $results['cards'];

	foreach ( $cards as $card ) {
		
		if ( isset( $card['imageUrl'] ) ) {

			ob_start();

			print_card( array( 'img_url' => $card['imageUrl'] ) );

			$response['cards'][] = ob_get_clean();
		}
	}
}

header('Content-Type: application/json');
echo json_encode( $response );
exit;
