<?php
// get cURL resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, 'https://marketing.affboat.com/api/v3/integration?api_token=lnShDYUhKM1seBBx6DwQDJj6G0OldfYV3V4RmN6U053szpfuPqS9MH2o6iGr');

// set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// json body
$json_array = [
  'link_id' => 2483,
  'fname' => $_POST['firstname'],
  'email' => $_POST['email'],
  'fullphone' => $_POST['full_number'],
  'source' => $_SERVER['HTTP_REFERER'],
  'campaign_id' => 115,
  'ip' => $_SERVER['REMOTE_ADDR'],
  'lname' => $_POST['lastname'],
  'click_id' => $_POST['click_id'],
  'utm_source' => $_POST['sub1'],
  'utm_term' => $_POST['sub2'],
  'utm_content' => $_POST['sub3'],
]; 
$body = http_build_query($json_array);

// set body
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

// send the request and save response to $response
$response = curl_exec($ch);

// close curl resource to free up system resources 
curl_close($ch);

$arr = json_decode($response, true);

if ($arr['autologin']) {
  setcookie('cabinet', $arr['autologin'], time()+60*90);
  header('location: ./thanks/?p=' . $_POST['p'] . '');
} else {
  header('location: ./error.php?err=' . $response . '');
}
