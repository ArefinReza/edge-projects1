<?php include "header.php" ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/home.css">


    <title>Category</title>
</head>

<body>



<section class="bg-dark text-white py-5">
        <div class="container text-center pt-4">
            <h1 class="display-4">Explore Our Categories</h1>
            <p class="lead">Discover a variety of blogs and insights tailored to your interests.</p>
        </div>
    </section>

    <!-- Category Cards -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($categoryBlogs as $categoryBlog) { ?>
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="assets/img/<?php echo $categoryBlog['image']; ?>" alt="Category Image" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><?php echo $categoryBlog['title']; ?></h5>
                                <p class="card-text text-muted">
                                    <?php echo substr($categoryBlog['description'], 0, 100) . '...'; ?>
                                </p>
                                <a href="action.php?page=blog-detail&id=<?php echo $categoryBlog['id']; ?>" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
    <script src="assets/css/bootstrap.js"></script>
</body>

</html>