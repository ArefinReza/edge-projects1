<footer class="bg-black text-white py-5">
    <div class="container">
        <!-- Footer Content -->
        <div class="row g-4">
            
            <div class="col-md-4">
                <h4 class="mb-3 text-uppercase">About Us</h4>
                <p class="">
                    We are dedicated to providing top-notch services in web development, design, and digital solutions. Let us help you bring your ideas to life!
                </p>
            </div>
           
            <div class="col-md-4">
                <h4 class="mb-3 text-uppercase">Blog Categories</h4>
                <ul class="list-unstyled">
                    <?php foreach ($categories as $category) { ?>
                        <li class="mb-2">
                            <a href="action.php?page=blog-category&id=<?php echo $category['id']; ?>" class="text-decoration-none text-white">
                                <i class="bi bi-chevron-right me-2"></i> <?php echo $category['name']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
           
            <div class="col-md-4">
                <h4 class="mb-3 text-uppercase">Contact Us</h4>
                <address class="">
                    <strong>Office Location:</strong><br>
                    Holding 77, Beribadh Road, Turag, Dhaka 1230<br>
                    <strong>Phone:</strong> 01819222446<br>
                    <strong>Email:</strong> arefin@uttarauniversity.edu.bd
                </address>
                <p class="mt-3">Subscribe to Our Newsletter</p>
                <form action="" method="post">
                    <div class="input-group">
                        <input type="email" class="form-control bg-transparent border-white text-white" name="email" placeholder="Enter your email" required>
                        <button type="submit" class="btn btn-danger">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
       
        <div class="row mt-5">
            <div class="col-12 text-center">
                <hr class="border-secondary">
                <p class=" mb-0">
                    &copy; 2024 Edge PHP Laravel Batch - 1 by <strong>Arefin Reza</strong>. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
