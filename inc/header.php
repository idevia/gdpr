<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>VacaPlus</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light py-3" id="topNav">
        <div class="container">
            <a class="navbar-brand" href="./index.html">
                <img src="./img/logo.svg" style="height: 30px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $page;?>#section2">Chi siamo </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $page;?>#section3">Come funziona </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $page;?>#section4">Tariffe </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./terms.php">Termini e condizioni </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./faq.php">FAQ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $page;?>#contact">Contatti </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://test.vacaplus.com/host">Accedi come Host</a>
                            <a class="dropdown-item" href="http://test.vacaplus.com/guest">Accedi come Guest</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="http://test.vacaplus.com/register/">Crea il tuo account</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
