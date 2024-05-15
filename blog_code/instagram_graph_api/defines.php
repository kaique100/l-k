<?php
	session_start();

	define( 'FACEBOOK_APP_ID', '202966721867280' );
	define( 'FACEBOOK_APP_SECRET', '●●●●●●●●' );
	define( 'FACEBOOK_REDIRECT_URI', 'http://localhost/l-k/instagram_graph_api/obtaining_access_token.php' );
	define( 'ENDPOINT_BASE', 'http://localhost/l-k/blog_code/instagram_graph_api/obtaining_access_token.php' );

	// accessToken
	$accessToken = 'YOUR-ACCESS-TOKEN-HERE';

	// page id
	$pageId = 'YOUR-PAGE-ID';

	// instagram business account id
	$instagramAccountId = 'YOUR-INSTAGRAM-ACCOUNT-ID';