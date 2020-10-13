<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="resources/css/admin.css" type="text/css" rel="stylesheet">
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
                    <li><a href="dashboard">Dashboard</a></li>
                    <li><a href="categories">Manage Categories</a></li>
                    <li><a href="products">Manage Products</a></li>
                    <li><a href="reviews">Manage Reviews</a></li>
                    <li><a href="orders">Manaage Orders</a></li>
                </ul>
            </div>
            <div class="main">
                <?php echo $content; ?>
            </div>
        </div>
    </section>
    <footer>
        Copyright
    </footer>
</body>
</html>