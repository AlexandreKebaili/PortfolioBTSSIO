<body>
<div class='masthead' style="color:black;">
                <div class="container col-8">
                    <div class="jumbotron jumbotron-sm" style="background-color:#fff5;">
                        <p class="lead" style="color:black;font-family:Georgia, serif;">
                            <h3 style="color:white;">GLPI</h3>
                            <div class="container" style="height:25px;"></div>


                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Qu'est-ce que le GLPI ?
                                        </button>
                                    </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php
                                        include("vues/text_glpi.php");
                                        ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="container" style="height:50px;"></div>
                                <p>    Vidéo de présentation de comment faire un ticket et un suivi :</p>
                                <br>
        
                               
                                <div class="container" style="height:25px;"></div>

                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/RLwiZTYUNkI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                                </div>

                                <div class="container" style="height:50px;"></div>

                                    <div class="container col-12">
                                        <h3 style="text-align:left;color:white;"> Mon GLPI :</h3>
                                        <div class="container" style="height:20px;"></div>

                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <a href="index.php?uc=administrer&action=glpiexpo" target="_blank"><img class="d-block w-100" src="images/GLPI/Slide1.png" alt="First slide"></a>
                                                <div class="carousel-caption d-none d-md-block">
                                                            <h5 style="color:black;"></h5>
                                                            <p style="color:black;">Création d'un compte</p>
                                                    </div>
                                            </div>
                                            <div class="carousel-item">
                                            <a href="index.php?uc=administrer&action=glpiexpo" target="_blank"><img class="d-block w-100" src="images/GLPI/Slide2.png" alt="Second slide"></a>
                                                    <div class="carousel-caption d-none d-md-block">
                                                            <h5 style="color:black;"></h5>
                                                            <p style="color:black;">Création des acteurs</p>
                                                    </div>
                                            </div>
                                            <div class="carousel-item">
                                            <a href="index.php?uc=administrer&action=glpiexpo" target="_blank"><img class="d-block w-100" src="images/GLPI/Slide3.png" alt="Third slide"></a>
                                                <div class="carousel-caption d-none d-md-block">
                                                            <h5 style="color:black;"></h5>
                                                            <p style="color:black;">Création d'un ticket</p>
                                                    </div>
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
                                </body>