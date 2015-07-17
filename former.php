<?php

/*

1. Add a new Slackbot integration.
2. Replace YOUR_SLACK_HOOK_HERE with your Team's Slackbot URL.
3. Go to html form page, enter text and channel name. Note that there is no data validation and this is probably horribly insecure.

!!! USE AT YOUR OWN RISK !!!

*/
$url = "YOUR_SLACK_HOOK_HERE" . $_POST["channel"];

$post_data = $_POST["slacktext"];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// we are doing a POST request
curl_setopt($ch, CURLOPT_POST, 1);
// adding the post variables to the request
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

curl_exec($ch);

curl_close($ch);

//echo $output;


?>
