<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>TestSelection</title>
</head>
<body style="height: auto;">
    <header style="height: 1000px;">
        <?php include "./content/header.php" ;?>
        <?php include "./content/slider.php"; ?>
    </header>
    <div class="container">
         <?php include "./content/inscreaseAbout.php";?>
        <div class="service">
            <?php include "./content/services.php";?>
        </div>
        <div class="section">
                <?php include "./content/testimonies.php";?>
            <div class="contact-form">
                <?php include "./content/contactform.php";?>
            </div>
        </div>
        <footer>
            <?php include "./content/footer.php";?>
        </footer>
    </div>








    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="/index.js"></script>
    <script src="jsfile.js"></script>

</body>
</html>