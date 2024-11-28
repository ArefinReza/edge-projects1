<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edge Project</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-8hTQeQttvb2LlqWw4H3VPrvNHNVgk8MA1yQoSCaLkqtMY/lmWgHK5ZxksgVMYOxk" crossorigin="anonymous">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-black text-white fixed-top">
    <div class="container">
        <a class="navbar-brand" href="action.php?page=home">Home Logo</a>
        <button class="navbar-toggler" type="button" data-bs-target="#menu" data-bs-toggle="collapse" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="action.php?page=home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="action.php?page=about" class="nav-link">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="serviceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Service
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="serviceDropdown">
                        <?php foreach ($categories as $category) { ?>
                            <li>
                                <a href="action.php?page=blog-category&id=<?php echo $category['id']; ?>" class="dropdown-item">
                                    <?php echo $category['name']; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item"><a href="action.php?page=gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="action.php?page=contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap JS (bundle includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Qh6Y3AVUmcZl21lH6XTzF3KsoXGTwOhAu20wiPgr46dh6fZhxACw9jsVbrFZKJlg" crossorigin="anonymous"></script>


</body>
</html>
