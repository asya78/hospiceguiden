<!DOCTYPE html>
<html lang="dk">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-language" content="dk">
        <link rel="shortcut icon" href="public/images/favicon.ico">
        <title><?= $hospiceguiden->page_title; ?></title>
        <link rel='stylesheet' href='public/css/bootstrap.min.css'>
        <link rel='stylesheet' href='public/css/font-awesome.min.css'>
        <link rel='stylesheet' href='public/css/main.css'>
    </head>
    <body>
        <!-- Top bar -->
        <header>
            <div class="container">
                <div class="row">                    
                    <div class="col-xs-12">
                        <!-- Logo -->
                        <a href="">
                            <img src="../../public/images/hospiceguiden-logo.png" alt="Hospiceguiden Logo">
                        </a>
                        <!-- End Logo -->
                        <!-- Links -->
                        <ul>
                            <li>
                                <a href="">
                                    Bliv frivillig
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Bliv medlem
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Presse
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Visksomheder
                                </a>
                            </li>
                        </ul>                     
                        <!-- End Links -->
                    </div>
                </div>
            </div>        
        </header>
        <!-- End Top bar -->
        <!-- Menu -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" 
                            data-toggle="collapse" 
                            data-target="#navbar" 
                            aria-expanded="false" 
                            aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                    
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">
                                Forsiden
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Hospice guide
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Om Os
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Nyheder
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Søg plads på et hospice
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <button type="button" class="btn btn-danger">Donation</button>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Menu -->
        <!-- Slider -->
        <section class="slider">
            <div class="container">
                <h1 class="row">Nemo voluptatem quia voluptas</h1>
                <p class="row">dolores ratione voluptatem</p>
            </div>
        </section>
        <!-- End Slider -->

