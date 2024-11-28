<?php include "header.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact Page</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        h4, h2 {
            color: #333;
        }
        .form-section {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

    </style>
</head>
<body>

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4 mt-4">Contact Page</h2>

        <!-- Full Name Section -->
        <section class="form-section">
            <h4>Generate Full Name</h4>
            <form action="?page=contact" method="post">
                <input type="hidden" name="action" value="fullname">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname"
                               value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ''; ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="middlename" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middlename" name="middlename"
                               value="<?php echo isset($_POST['middlename']) ? htmlspecialchars($_POST['middlename']) : ''; ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname"
                               value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname"
                           value="<?php echo isset($fullname) ? htmlspecialchars($fullname) : ''; ?>" readonly>
                </div>
                <div class=" d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">Generate Full Name</button>
                </div>
            </form>
        </section>

        <!-- Print All Numbers Section -->
        <section class="form-section">
            <h4>Print All Numbers</h4>
            <form action="?page=contact" method="post">
                <input type="hidden" name="action" value="print_all">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="num1_all" class="form-label">First Number</label>
                        <input type="number" class="form-control" id="num1_all" name="num1"
                               value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="num2_all" class="form-label">Second Number</label>
                        <input type="number" class="form-control" id="num2_all" name="num2"
                               value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="allNumbers" class="form-label">All Numbers</label>
                    <input type="text" class="form-control" id="allNumbers"
                           value="<?php echo isset($allNumbers) ? htmlspecialchars($allNumbers) : ''; ?>" readonly>
                </div>
                <div class=" d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-danger">Print All Numbers</button>
                </div>
            </form>
        </section>

        <!-- Print Odd or Even Numbers Section -->
        <section class="form-section">
            <h4>Print Odd or Even Numbers</h4>
            <form action="?page=contact" method="post">
                <input type="hidden" name="action" value="odd_even">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="num1_odd_even" class="form-label">First Number</label>
                        <input type="number" class="form-control" id="num1_odd_even" name="num1"
                               value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="num2_odd_even" class="form-label">Second Number</label>
                        <input type="number" class="form-control" id="num2_odd_even" name="num2"
                               value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Choose Type</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="odd" name="type" value="odd" required>
                            <label class="form-check-label" for="odd">Odd</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="even" name="type" value="even" required>
                            <label class="form-check-label" for="even">Even</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="oddEvenNumbers" class="form-label">Odd/Even Numbers</label>
                    <input type="text" class="form-control" id="oddEvenNumbers"
                           value="<?php echo isset($oddEvenNumbers) ? htmlspecialchars($oddEvenNumbers) : ''; ?>" readonly>
                </div>
                <div class=" d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-success">Print Odd/Even Numbers</button>
                </div>
            </form>
        </section>

        <!-- Calculator Section -->
        <section class="form-section">
            <h4>Calculator</h4>
            <form action="?page=contact" method="post">
                <input type="hidden" name="action" value="calculate">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="calc_num1" class="form-label">First Number</label>
                        <input type="number" class="form-control" id="calc_num1" name="calc_num1"
                               value="<?php echo isset($calc_num1) ? htmlspecialchars($calc_num1) : ''; ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="calc_num2" class="form-label">Second Number</label>
                        <input type="number" class="form-control" id="calc_num2" name="calc_num2"
                               value="<?php echo isset($calc_num2) ? htmlspecialchars($calc_num2) : ''; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Operation</label>
                    <div class="radio-group">
                        <label><input type="radio" name="operation" value="add" <?php echo isset($operation) && $operation === 'add' ? 'checked' : ''; ?>> Add</label>
                        <label><input type="radio" name="operation" value="sub" <?php echo isset($operation) && $operation === 'sub' ? 'checked' : ''; ?>> Subtract</label>
                        <label><input type="radio" name="operation" value="mul" <?php echo isset($operation) && $operation === 'mul' ? 'checked' : ''; ?>> Multiply</label>
                        <label><input type="radio" name="operation" value="div" <?php echo isset($operation) && $operation === 'div' ? 'checked' : ''; ?>> Divide</label>
                        <label><input type="radio" name="operation" value="mod" <?php echo isset($operation) && $operation === 'mod' ? 'checked' : ''; ?>> Modulus</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="calcResult" class="form-label">Result</label>
                    <input type="text" class="form-control" id="calcResult"
                           value="<?php echo isset($calculationResult) ? htmlspecialchars($calculationResult) : ''; ?>" readonly>
                </div>
                <div class=" d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Calculate</button>
                </div>
            </form>
        </section>
        <div class="d-flex justify-content-end mb-4">
            <form action="?page=contact" method="post">
                <input type="hidden" name="action" value="reset">
                <button type="submit" class="btn btn-warning px-4">Reset</button>
            </form>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
