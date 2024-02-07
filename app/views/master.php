<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />
</head>
<body>
    <div id="header">
        <?php require 'partials/header.php'; ?>
    </div>
    <div class="container">
        <?php require $view; ?>
    </div>
</body>
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
</html>