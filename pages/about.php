<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
    .hero-section {
        background: url('assets/img/item6.jpg') no-repeat center center;
        background-size: cover;
        position: relative;
        color: white;
        padding: 100px 0;
        text-align: center;
    }

    /* Dark overlay */
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Adjust the opacity as needed */
        z-index: 1;
    }

    /* Ensure text is above the overlay */
    .hero-section .container {
        position: relative;
        z-index: 2;
    }

    .hero-section h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .hero-section p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto;
    }
</style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1>About Us</h1>
        <p>Your trusted partner for innovative solutions and exceptional services. Discover more about who we are and what we do.</p>
    </div>
</section>

<!-- About Us Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-content">
                    <h3>Who We Are</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim est labore magnam optio quas quidem repellendus sit velit. Cupiditate exercitationem, expedita fugit laborum obcaecati perspiciatis rem reprehenderit rerum! Dignissimos, omnis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias earum impedit iste laudantium vero! Aut dicta expedita nisi saepe vitae. Autem est ipsam laborum quia? Adipisci in incidunt optio praesentium!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include "footer.php"; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
