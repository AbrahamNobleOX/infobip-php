<?php

$curl = curl_init();

$authEncoded = base64_encode('noblexeyi:Abram193#@Abram193#@');

$phoneNo = "";
$message = "Hello, is SMS working now?";
$callUrl = "";
$apiKey = "";

// $phoneNo = $_POST['phoneNo'];
// $message = $_POST['message'];
// $sdate = $_POST['sdate'];
// $edate = $_POST['edate'];
// $sdate = date('D, jS M y H:i:s', strtotime($sdate));
// $edate = date('D, jS M y H:i:s', strtotime($edate));

curl_setopt_array($curl, array(
    CURLOPT_URL => $callUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{"messages":[{"from":"CompanyName","destinations":[{"to":'.$phoneNo.'}],"text":"'.$message.'"}]}',
    CURLOPT_HTTPHEADER => array(
        'Authorization: App '.$apiKey,
        'Content-Type: application/json',
        'Accept: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


// Below is other functionalities like Schedules and More..
// ---------------

// $curl = curl_init();

// curl_setopt_array($curl, array(
//     CURLOPT_URL => 'https://2kgxll.api.infobip.com/sms/1/reports?messageId=34590935486903571767',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_ENCODING => '',
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 0,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => 'GET',
//     CURLOPT_HTTPHEADER => array(
//         'Authorization: Basic ' . $authEncoded,
//         'Accept: application/json'
//     ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;

// -----------------

// $curl = curl_init();

// curl_setopt_array($curl, array(
//     CURLOPT_URL => 'https://2kgxll.api.infobip.com/sms/2/text/advanced',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_ENCODING => '',
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 0,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => 'POST',
//     CURLOPT_POSTFIELDS =>'{"messages":[{"from":"InfoSMS","destinations":[{"to":"41793026727","messageId":"MESSAGE-ID-123-xyz"},{"to":"41793026834"}],"text":"Artık Ulusal Dil Tanımlayıcısı ile Türkçe karakterli smslerinizi rahatlıkla iletebilirsiniz.","flash":false,"language":{"languageCode":"TR"},"transliteration":"TURKISH","intermediateReport":true,"notifyUrl":"https://www.example.com/sms/advanced","notifyContentType":"application/json","callbackData":"DLR callback data","validityPeriod":720},{"from":"41793026700","destinations":[{"to":"41793026700"}],"text":"A long time ago, in a galaxy far, far away... It is a period of civil war. Rebel spaceships, striking from a hidden base, have won their first victory against the evil Galactic Empire.","sendAt":"2021-08-25T16:00:00.000+0000","deliveryTimeWindow":{"from":{"hour":6,"minute":0},"to":{"hour":15,"minute":30},"days":["MONDAY","TUESDAY","WEDNESDAY","THURSDAY","FRIDAY","SATURDAY","SUNDAY"]}}],"bulkId":"BULK-ID-123-xyz","tracking":{"track":"SMS","type":"MY_CAMPAIGN"}}',
//     CURLOPT_HTTPHEADER => array(
//         'Authorization: {authorization}',
//         'Content-Type: application/json',
//         'Accept: application/json'
//     ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;
?>