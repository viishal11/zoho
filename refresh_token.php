<?php 

function generate_refresh_token()
{

	$post = [

		'code' 			=>'1000.1643acf1e7f003bf4f03a104bae96594.39d7b8bb51dbdae42f69b3c539a54367',
		'redirect_uri' 	=>'https://bizfi.io',
		'client_id'		=>'1000.2TB4PG1N9TC4C5Q1VU70NPSWN3FGWV',
		'client_secret' =>'d20dff1a1e2862992f695b96806e66b28bdfb7ea2c',
		'grant_type'	=>'authorization_code'	

	];


	//$postdata = json_encode($data);
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL,"https://accounts.zoho.com/oauth/v2/token");
    //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded'
        )
    );
    $result = curl_exec($ch);

    print_r($result);

    //$res = json_decode($result,true);
    //print_r($res);
    //curl_close($ch);
}

generate_refresh_token();

//1000.7aacb0874cc6bb2fb13924b47b6b7964.a674934db86e6f6acb26518c8eb8a6a2

/*{
  "access_token": "1000.d0bedda244fd7ca027b790ed6d3b4339.f00bfe411876977dbc51dcaa929d86da",
  "refresh_token": "1000.318113483ef6cc6f1b4e3e58948c1ef5.93a097ed5809fff30cec300e09eeaf8b",
  "api_domain": "https://www.zohoapis.com",
  "token_type": "Bearer",
  "expires_in": 3600
}*/

?>
