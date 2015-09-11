<?php 
session_start();
require_once __DIR__ . '/facebook-php-sdk/src/Facebook/autoload.php';
use Facebook\FacebookRequest;
?>
<?php 

// INITIALIZE APP
$myAppID = '1657479731133920';
$myAppSecret = '3ea73a3d708014286597b966337ba139';
$fb = new Facebook\FacebookApp([
	'app_id' => $myAppID,
	'app_secret' => $myAppSecret,
	'default_graph_version' => 'v2.4',
	]);


// CREATE ACCESS TOKEN
$helper = $fb->getRedirectLoginHelper();
try {
	$accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
	echo 'Graph returned an error: ' . $e->getMessage();
	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
	exit;
}

if (isset($accessToken)) {
  // Logged in!
	$_SESSION['facebook_access_token'] = (string) $accessToken;
  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
}




$request = new FacebookRequest(
	$fb,
	$session,
	'GET',
	'/{object-id}/insights/{metric-name}',
	array (
		'period' => 'month',
		)
	);
//$response = $request->execute();
$graphObject = $request->getGraphObject();


?>
LOGIN CALLBACK