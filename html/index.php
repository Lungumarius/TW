<!doctype html>
<html lang="en">
<?php $link = mysqli_connect("localhost", "root", "", "magazin_online");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <title>Magazin produse cosmetice</title>
</head>

<body>



    <header>
        <div class="container-fluid bg-dark header-top d-none d-md-block">
            <div class="container">
                <div class="row text-light pt-2 pb-2">
                    <div class="col-md-5"> <?php
					session_start();
					echo "".$_SESSION['mail']."";
					 ?></div>
                    <div class="col-md-3">

                    </div>


                    <div class="col-md-2"> Cosul meu</div>
                </div>
            </div>
        </div>
        <!--Navbar-->


        <div class="nav">
            <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Nume Magazin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
		</button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class=" nav-link" id="home" href="home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produse favorite</a>
                        </li>
                        <div class="dropdown">
                            <button class="btnCategorii dropdown-toggle bg-dark" type="button" data-toggle="dropdown">Categorii
						<span class="caret"></span>
					</button>
                            <ul class="dropdown-menu bg-dark">
                                <li><a class="test" tabindex="-1" href="#" id="ingrijire_par" >Îngrijire păr</a></li>
                                <li><a class="test" tabindex="-1" href="#">Îngrijire ten </a></li>
                                <li><a class="test" tabindex="-1" href="#">Îngrijire corp</a></li>

                                        <li><a class="test" tabindex="-1" href="#">Creme ten și corp</a></li>
                                        <li><a class="test" tabindex="-1" href="#">Măști</a></li>
                                        <li><a class="test" tabindex="-1" href="#">Produse demachiante</a></li>
                                        <li><a class="test" tabindex="-1" href="#" >Șampon și balsam</a></li>


                                        <li><a class="test" tabindex="-1" href="#">Mascara</a></li>
                                        <li><a class="test" tabindex="-1" href="#">Bază machiaj</a></li>
                                        <li><a class="test" tabindex="-1" href="#">Ruj și creion de buze</a></li>
                                        <li><a class="test" tabindex="-1" href="#">Tuș și creion ochi</a></li>
                                    </ul>


                        </div>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				            Contul meu
					        </a>
                            <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <a class="test" href="#">Comenzile mele</a>
                                <a class="test" href="#">Review-urile mele</a>
                                <a class="test" href="#">Date personale</a>
                                <a class="test" href="#">Garantiile mele</a>
                                <a class="test" href="#">Retururile mele</a>
                                <a class="test" href="#">Cardurile mele</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="register" href="#">Register / Login</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" id="cartt" href="#">Coșul meu</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>

            </nav>
        </div>
    </header>
    <main>
        <div class="container2">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="carousel-img" src="../img/img1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="carousel-img" src="../img/img2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="carousel-img" src="../img/img3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>





        <h1 style="text-align: center; padding-top: 15vh; padding-bottom: 15vh"> Top 10 produse</h1>

        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="../img/img1.jpg" alt="Card image cap" style="height:28vh">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>

            </div>
            <div class="card">
                <img class="card-img-top" src="../img/img2.jpg" alt="Card image cap " style="height:28vh">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>

            </div>
            <div class="card">
                <img class="card-img-top" src="../img/img3.jpg" alt="Card image cap" style="height:28vh">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="../img/img3.jpg" alt="Card image cap" style="height:28vh">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="../img/img3.jpg" alt="Card image cap" style="height:28vh">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
        </div>
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="../img/img1.jpg" alt="Card image cap" style="height:28vh">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>

            </div>
            <div class="card">
                <img class="card-img-top" src="../img/img2.jpg" alt="Card image cap " style="height:28vh">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>

            </div>
            <div class="card">
                <img class="card-img-top" src="../img/img3.jpg" alt="Card image cap" style="height:28vh">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="../img/img3.jpg" alt="Card image cap" style="height:28vh">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="../img/img3.jpg" alt="Card image cap" style="height:28vh">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
        </div>



    </main>

    <footer>
        <h1 style="text-align: center; padding: 80px 0;">Lorem ipsum </h1>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>






</body>

</html>
