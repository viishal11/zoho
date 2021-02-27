<?php 

function insert_records()
{

	$access_token = '1000.5fc998e17ce14e9c483312c9113a2099.a021e24b3b6d88221f54e3b8992d17e8';

    $Description='This is Desc';
    $Quantity='10';
    $Equipment_description='This is Equipment Desc';
    $Invoice_value='1000';

    $post_data = [

        'data' => [
            [
                "Company"       => "Vishal Company",
                "First_Name"    => "Vishal",
                "Last_Name"     => "123",
                "Email"         => "vishalvasanimca@gmail.com",
                "State"         => "Gujarat",
                "Phone"         => "9712447799",
                "Description"   => $Description." Quantity : ".$Quantity." Equipment Description : ".$Equipment_description." Invoice_value : ".$Invoice_value
            ]
        ],
        'trigger'=> [
            "approval",
            "workflow",
            "blueprint"
        ]

    ];

    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL,"https://www.zohoapis.com/crm/v2/Leads");
    
    curl_setopt($ch, CURLOPT_POST, 1);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
        'Authorization: Zoho-oauthtoken ' . $access_token,
        'Content-Type: application/x-www-form-urlencoded'
        )
    );
    $result = curl_exec($ch);

    //print_r($result);
    $res = json_decode($result,true);
    //curl_close($ch);
    echo "<pre>";
    print_r($res);
    print_r($res['data'][0]['code']);

    if($res['data'][0]['code']=='SUCCESS'){
        echo "successfully added.";
    }else{

    }
}

insert_records();



?>
