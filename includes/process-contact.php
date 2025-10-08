<?php
/**
 * Contact Form Handler
 * Processes contact form submissions with validation and email sending
 */

require_once dirname(__DIR__) . '/config/config.php';

// Response array
$response = ['success' => false, 'message' => ''];

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Invalid request method.';
    echo json_encode($response);
    exit;
}

// Sanitize and validate input
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
$service = trim(filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING));
$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required.';
}

if (empty($email)) {
    $errors[] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format.';
}

if (empty($message)) {
    $errors[] = 'Message is required.';
}

if (!empty($errors)) {
    $response['message'] = implode(' ', $errors);
    echo json_encode($response);
    exit;
}

// Prepare email content
$to = CONTACT_EMAIL_TO;
$subject = 'New Contact Form Submission - ' . SITE_NAME;

$emailBody = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #4f46e5 0%, #10b981 100%); color: white; padding: 20px; text-align: center; }
        .content { background: #f9fafb; padding: 20px; margin-top: 20px; border-radius: 8px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #4f46e5; }
        .footer { margin-top: 20px; text-align: center; font-size: 12px; color: #6b7280; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Contact Form Submission</h2>
        </div>
        <div class='content'>
            <div class='field'>
                <span class='label'>Name:</span><br>
                " . htmlspecialchars($name) . "
            </div>
            <div class='field'>
                <span class='label'>Email:</span><br>
                " . htmlspecialchars($email) . "
            </div>
            <div class='field'>
                <span class='label'>Phone:</span><br>
                " . htmlspecialchars($phone ?: 'Not provided') . "
            </div>
            <div class='field'>
                <span class='label'>Service Interested In:</span><br>
                " . htmlspecialchars($service ?: 'Not specified') . "
            </div>
            <div class='field'>
                <span class='label'>Message:</span><br>
                " . nl2br(htmlspecialchars($message)) . "
            </div>
        </div>
        <div class='footer'>
            <p>This email was sent from " . SITE_NAME . " contact form.</p>
        </div>
    </div>
</body>
</html>
";

// Email headers
$headers = [
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=UTF-8',
    'From: ' . CONTACT_EMAIL_FROM,
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion()
];

// Send email
$mailSent = mail($to, $subject, $emailBody, implode("\r\n", $headers));

if ($mailSent) {
    // Optionally save to database here
    // saveContactSubmission($name, $email, $phone, $service, $message);
    
    $response['success'] = true;
    $response['message'] = 'Thank you for your message! We will get back to you within 24 hours.';
} else {
    $response['message'] = 'Sorry, there was an error sending your message. Please try again or email us directly at ' . SITE_EMAIL;
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
exit;

/**
 * Optional: Save contact submission to database
 */
function saveContactSubmission($name, $email, $phone, $service, $message) {
    try {
        $db = Database::getInstance()->getConnection();
        
        $stmt = $db->prepare("
            INSERT INTO contact_submissions (name, email, phone, service, message, submitted_at)
            VALUES (:name, :email, :phone, :service, :message, NOW())
        ");
        
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':service' => $service,
            ':message' => $message
        ]);
        
        return true;
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        return false;
    }
}

