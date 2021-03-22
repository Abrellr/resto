<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="../style.css">
    <!-- Fontawsome -->
    <script src="https://kit.fontawesome.com/4313c5938d.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Google Icons-->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <title>Lunch app</title>
</head>

<body>
    <!-- NAVBAR -->
    <div class="container navbar-contain">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="index.html">Lunch app</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#"></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn my-2 my-sm-0" type="submit">
                        <span class="material-icons">search</span>
                    </button>
                </form>
            </div>
        </nav>
    </div>

    <!-- JUMBOTRON -->

    <div class="container mktImage">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-7 px-0">
                <img src="../images/jumbotron.jpg" alt="jumbotron image" class="img-fluid grow">
            </div>
            <div class="col-lg-5 article-preview">
                <p class="article-category-small infoTitleMkt">Lunch Ideas</p>
                <a href="https://www.o-ren-ishii.com/">
                    <h2 class="article-title-big my-5">Quinoa Sweet Potato Salat</h2>
                </a>
                <div class="d-flex flex-row pt-3 extraInfoMkt">
                    <div class=" align-items-center pl-2 pr-2">
                        <span class="material-icons md-40 pb-1">🚶‍♀️</span>
                        <p>10 min</p>
                    </div>
                    <div class="align-items-center pl-2 pr-2">
                        <span class="material-icons-outlined md-40 pb-1">💰</span>
                        <p>günstig</p>
                    </div>
                    <div class="align-items-center pl-2 pr-2">
                        <span class="material-icons-outlined md-40 pb-1">🥬</span>
                        <p>Veggietauglich</p>
                    </div>
                </div>

            </div>
        </div>

    </div>