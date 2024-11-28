<?php include "header.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ie=edge"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>

<section class="bg-dark text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 pt-4">Gallery</h1>
        <p class="lead">Browse through our stunning collection of images</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <?php foreach ($gellery as $image) { ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/<?php echo $image['image']; ?>" alt="Gallery Image" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h6 class="text-muted"><?php echo $image['heading']; ?></h6>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
