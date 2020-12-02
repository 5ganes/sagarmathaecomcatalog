<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="resources/css/admin.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="resources/js/common.js"></script>
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        Online Catalog
    </header>
    <section>
        <div class="container">
            <div class="sidebar">
                <ul>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="users.php">Manage Users</a></li>
                    <li><a href="categories.php">Manage Categories</a></li>
                    <li><a href="products.php">Manage Products</a></li>
                    <li><a href="reviews.php">Manage Reviews</a></li>
                    <li><a href="orders.php">Manage Orders</a></li>
                    <li><a href="logout.php" style="color: red">Logout</a></li>
                </ul>
            </div>
            <div class="main">
                <?php echo $body; ?>
            </div>
        </div>
    </section>
    <footer>
        Copyright
    </footer>
</body>
</html>