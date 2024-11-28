<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ie=edge" />

    <link rel="stylesheet" href="assets/css/bootstrap.css">


    <title>Home</title>
    <style>
        #slider {
            height: 50vh;
        }

        @media (min-width: 1200px) {
            #slider {
                height: 500px;
            }
        }

        @media (min-width: 1600px) {
            #slider {
                height: 600px;
            }
        }

        .carousel-item img {
            object-fit: cover;
            object-position: center center;
            height: 100%;
        }
    </style>
</head>

<body>
    <?php include "header.php" ?>
    <section>
        <div id="slider" class="carousel slide vh-50 overflow-hidden" data-bs-ride="carousel" data-bs-interval="1800">
            <div class="carousel-inner h-100">
                <?php $firstItem = true; ?>
                <?php foreach ($sliders as $slider) { ?>
                    <div class="carousel-item <?php echo $firstItem ? 'active' : ''; ?> h-100">
                        <img class="img-fluid w-100 h-100 object-fit-cover" src="assets/img/<?php echo $slider['image']; ?>" alt="" class="">
                        <div class="carousel-caption">
                            <h1><?php echo $slider['heading']; ?></h1>
                            <p><?php echo $slider['textp']; ?></p>
                            <a class="btn btn-info"><?php echo $slider['button']; ?></a>
                        </div>
                    </div>
                    <?php $firstItem = false; ?>
                <?php } ?>
            </div>
        </div>
    </section>


    

    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog) { ?>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="assets/img/<?php echo $blog['image']; ?>" alt="" class="">
                            <div class="card-body">
                                <h4><?php echo $blog['title']; ?></h4>
                                <p><?php echo substr($blog['description'], 0, 80) . '...' ?></p>
                                <a href="action.php?page=blog-detail&id=<?php echo $blog['id']; ?>" class="btn btn-outline-danger"> Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section>
    <div class="container mb-4">
        <div class="row">
            <?php foreach ($newes as $news) { ?>
                <div class="col-12 col-md-6 mb-4">
                    <div class="card border-warning">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <img src="assets/img/<?php echo $news['image']; ?>" alt="" class="w-100 h-100 object-fit-cover" />
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $news['heading']; ?></h5>
                                    <p class="card-text"><?php echo $news['date']; ?></p>
                                    <a href="action.php?page=newsdetails&id=<?php echo $news['id']; ?>" class="btn btn-outline-danger"><?php echo $news['button']; ?></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>



    <section>
        <?php include 'footer.php' ?>
    </section>

    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
    <script src="assets/css/bootstrap.js"></script>
</body>

</html>