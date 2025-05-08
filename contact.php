<?php
// Starting the session to maintain state
session_start();

// Initialize variables for form fields and errors
$name = $email = $message = '';
$nameErr = $emailErr = $messageErr = '';
$formSubmitted = false;

// Check if there are any form submission results in the session
if (isset($_SESSION['form_submission'])) {
    // If form was submitted successfully
    if ($_SESSION['form_submission']['success']) {
        $formSubmitted = true;
    } 
    // If there were errors, retrieve them
    else {
        $nameErr = $_SESSION['form_submission']['errors']['name'] ?? '';
        $emailErr = $_SESSION['form_submission']['errors']['email'] ?? '';
        $messageErr = $_SESSION['form_submission']['errors']['message'] ?? '';
        
        // Retrieve old input values if available
        $name = $_SESSION['form_submission']['old_input']['name'] ?? '';
        $email = $_SESSION['form_submission']['old_input']['email'] ?? '';
        $message = $_SESSION['form_submission']['old_input']['message'] ?? '';
    }
    
    // Clear the session data after using it
    unset($_SESSION['form_submission']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - PHP Website</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Adding Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main class="container">
        <section class="contact-section">
            <h1>Contact Us</h1>
            <p>Fill out the form below to get in touch with us.</p>
            
            <?php if ($formSubmitted): ?>
                <div class="alert success">
                    <i class="fas fa-check-circle"></i> Thank you for your message! We will get back to you soon.
                </div>
            <?php endif; ?>
            
            <div class="contact-container">
                <form id="contactForm" action="includes/form_handler.php" method="POST" novalidate>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
                        <?php if ($nameErr): ?>
                            <span class="error"><?php echo $nameErr; ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                        <?php if ($emailErr): ?>
                            <span class="error"><?php echo $emailErr; ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="5" required><?php echo htmlspecialchars($message); ?></textarea>
                        <?php if ($messageErr): ?>
                            <span class="error"><?php echo $messageErr; ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <button type="submit" class="btn primary-btn">Send Message</button>
                </form>
                
                <div class="contact-info">
                    <h3>Alternative Ways to Contact Us</h3>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <span>email@example.com</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <span>+123 456 7890</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>123 Street Name, City, Country</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="js/validation.js"></script>
</body>
</html>
