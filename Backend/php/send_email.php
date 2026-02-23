<?php
// Set content type for JSON
header("Content-Type: application/json");

// Get the POST data
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['name']) || !isset($data['phone']) || !isset($data['address'])) {
    http_response_code(400);
    echo json_encode(["error" => "All fields are required."]);
    exit;
}

// Sanitize inputs
$name = htmlspecialchars($data['name']);
$phone = htmlspecialchars($data['phone']);
$address = htmlspecialchars($data['address']);

// Email details
$to = "ashishbedare@gmail.com"; // Replace with customer email
$subject = "Order Confirmation";
$message = "
Hello $name,

Your order has been confirmed!

Details:
Name: $name
Phone: $phone
Address: $address

Thank you for your purchase!
";


// Send the email
if (mail($to, $subject, $message, $headers)) {
    http_response_code(200);
    echo json_encode(["message" => "Order placed successfully."]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Failed to send confirmation email."]);
}
?>
