<?php 

    $page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
    if ($page_name == 'index' ) $page_name = 'úvod';

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="">
    <title><?php 
    if ($page_name == 'index') echo "Solná Jeskyně, Solárium, Magnetoterapie - Písek";
    else echo ucfirst($page_name); ?> - Solná Jeskyně, Solárium, Magnetoterapie - Písek
    </title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/queries.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body>
    <header>
        <div class="brand">
            <a id="logo" href="index.php"><img src="assets/img/old-logo.jpg" alt="logo"></a>
        </div>
        <nav>
            <div class="container">
                <ul>
                    <?php 

                        if ($page_name == 'úvod') echo '<li><a style="background: #d9856ba1; color: #fff;">Úvod</a></li>';
                        else echo '<li><a href="index.php">Úvod</a></li>';

                        if ($page_name == 'fotogalerie') echo '<li><a style="background: #d9856ba1; color: #fff;">fotogalerie</a></li>';
                        else echo '<li><a href="fotogalerie.php">fotogalerie</a></li>';

                        if ($page_name == 'ceník') echo '<li><a style="background: #d9856ba1; color: #fff;">ceník</a></li>';
                        else echo '<li><a href="ceník.php">ceník</a></li>';

                        if ($page_name == 'kontakt') echo '<li><a style="background: #d9856ba1; color: #fff;">kontakt</a></li>';
                        else echo '<li><a href="kontakt.php">kontakt</a></li>';
                    ?>
                </ul>
            </div>
        </nav>

    </header>

