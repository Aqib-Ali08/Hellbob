<?php
$phone_number = '9876543210'; // Your Indian phone number
$country_code = '+91'; // India's country code

// Remove any non-numeric characters from the phone number
$phone_number = preg_replace('/[^0-9]/', '', $phone_number);

// Add the country code to the phone number
$formatted_number = $country_code . $phone_number;

// Output the formatted phone number
echo $formatted_number; // Output: +919876543210


?>
