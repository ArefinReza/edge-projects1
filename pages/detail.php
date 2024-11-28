<?php include "header.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ie=edge"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/home.css">


    <title>Category</title>
</head>
<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body mt-5">
                        <h1 class="text-center"><?php echo $singleBlog['title']; ?></h1>
                        <hr/>
                        <img src="assets/img/<?php echo $singleBlog['image']; ?>"/>
                        <p class="my-4"><?php echo $singleBlog['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
<script src="assets/css/bootstrap.js"></script>
</body>
</html>