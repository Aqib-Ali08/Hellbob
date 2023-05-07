<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

// Set your Twilio account SID and auth token
$accountSid = 'AC478e6b5f275ad5a80a67664ba5131f25';
$authToken = '01e41d8ef940b1b8058ec1b224f191c8';

// Set up the Twilio client
$client = new Twilio\Rest\Client($accountSid, $authToken);

// Generate OTP
$otp = rand(100000, 999999);

// Send OTP via Twilio Verify API
$verification = $client->verify->v2->services('VA388b83736dc44a9f07e5a9e779877afd')
                                     ->verifications
                                     ->create(+917980123742, 'sms', array('code' => $otp));

// Store OTP and phone number in session
session_start();
$_SESSION['otp'] = $otp;
$_SESSION['phone'] = +916289736146;

// Display success message and OTP verification form
echo 'OTP sent to ' . $phone . '<br>';
echo '<form method="POST" action="verify.php">';
echo '<label for="otp">Enter OTP:</label>';
echo '<input type="text" id="otp" name="otp" required>';
echo '<br>';
echo '<button type="submit">Verify OTP</button>';
echo '</form>';

?>
