<?php
// Starting the session to maintain state
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PHP Website</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Adding Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main class="container">
        <section class="welcome-section">
            <h1>Welcome to Our Website</h1>
            <p>This is a simple PHP website with a contact form functionality.</p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn primary-btn">Contact Us</a>
                <a href="#" class="btn secondary-btn">Learn More</a>
            </div>
        </section>
        
        <section class="features-section">
            <h2>Our Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-code"></i>
                    <h3>Clean Code</h3>
                    <p>Our code is structured and well-organized.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Responsive Design</h3>
                    <p>Site works well on all device sizes.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-check-circle"></i>
                    <h3>Form Validation</h3>
                    <p>Client and server-side validation implemented.</p>
                </div>
            </div>
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>
