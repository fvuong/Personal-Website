<?php 
session_start();
require_once __DIR__ . '/facebook-php-sdk/src/Facebook/autoload.php';
?>


<?php 
$myAppID = '1657479731133920';
$myAppSecret = '3ea73a3d708014286597b966337ba139';
$fb = new Facebook\Facebook([
	'app_id' => $myAppID,
	'app_secret' => $myAppSecret,
	'default_graph_version' => 'v2.4',
	]);


	?>



	<div id="main">
		<section id="content">
			<div class='out-wrapper'>
				<div class='wrapper'>
					FACEBOOK











					<?php 











$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://www.frankvuong.com/login-callback/', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';







?>






</div>
</div>
</section>
</div>
