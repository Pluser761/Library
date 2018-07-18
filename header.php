<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/dopstyle.css" rel="stylesheet" media="screen">
    <script src="../../../assets/js/html5shiv.js"></script>
    <script src="../../../assets/js/respond.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 head-block"></div>
        <div class="col-md-12 top-menu">

            <ul class="menu-main">
                <li><a href="index.php" <?php echo $a;?>>Главная</a></li>
                <li><a href="authors.php" <?php echo $b;?>>Авторы</a></li>
                <li><a href="books.php" <?php echo $c;?>>Книги</a></li>
                <li><a href="library.php" <?php echo $d;?>>Библиотеки</a></li>
            </ul>

        </div>