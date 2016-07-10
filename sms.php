<?php

require "/twilio-php/Services/Twilio.php";

$AccountSid = "AC4f260eb171a398ff08b93c5c70b53679"; // Your Account SID from www.twilio.com/console
$AuthToken = "bf33678879bea5fb79f1b9f9a9b48633";   // Your Auth Token from www.twilio.com/console

$client = new Services_Twilio($AccountSid, $AuthToken);

try {
    $message = $client->account->messages->create(array(
        "From" => "+18054914835 ", // From a valid Twilio number
        "To" => "+9779808224917", // Text this number
        "Body" => "River Water Level is increasing Rapidly",
    ));
} catch (Services_Twilio_RestException $e) {
    echo $e->getMessage();
}
// Display a confirmation message on the screen
// echo "Sent message {$message->sid}";
?>