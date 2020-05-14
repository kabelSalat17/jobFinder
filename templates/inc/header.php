<!DOCTYPE html>
<html>
<head>
    <title>JobFinder</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-yrfSO0DBjS56u5M+SjWTyAHujrkiYVtRYh2dtB3yLQtUz3bodOeialO59u5lUCFF" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body style="background-image:linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('images/bg.jpg');">
    <div class="container">
        <nav>
            <ul class="nav justify-content-between">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php" id="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Insert a new Job</a>
                </li>
            </ul>
        </nav>
            <h3 class="text-center"><?php echo SITE_TITLE;?></h3>
        
        <!-- display messages here -->
        <?php displayMessage() ;?>