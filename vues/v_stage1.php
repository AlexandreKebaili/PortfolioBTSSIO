
<body>
  <div class='masthead' style="color:black;">
    <div class="container col-8">
      <div class="jumbotron jumbotron-sm" style="background-color:#fff5;">
        <div style="height:180px;">
          <img class="rounded mx-auto d-block" src="images/Veille/antemeta.jpg" style="width:50%;height:auto;align:center;" alt="">
        </div>
        <div class="container"style="height:100px;"></div>
            


        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Qui est AntemetA ?
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <?php
                include("vues/text_antemeta1.php");
                ?>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Qu’est ce que l’ ISO27001 ?
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <?php
                  include("vues/text_antemeta2.php");
                  ?>             
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Quel est la mission qui m’a été confié ?
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <?php
                  include("vues/text_antemeta3.php");
                ?>
              </div>
            </div>
          </div>
        </div>
        </div>

        <div class="container" style="height:50px;"></div>

        <div class="jumbotron jumbotron-sm" style="background-color:#fff5;">
        <div class="jumbotron jumbotron-sm" style="background-color:#fff10;">

        <article> 
          <?php
          include("vues/text_antemeta3.php");
          ?>
        </article>
        </div>
        <div class="accordion" id="accordionCustomExample">
          <div class="card">
            <div class="card-header" id="headingCustomOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseCustomOne" aria-expanded="true" aria-controls="collapseCustomOne">
                  Fichiers CSV
                </button>
              </h5>
            </div>

            <div id="collapseCustomOne" class="collapse" aria-labelledby="headingCustomOne" data-parent="#accordionCustomExample">
              <div class="card-body">
              <a href="index.php?uc=administrer&action=csvexpo" target="_blank">Extrait du fichier CSV</a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingCustomTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCustomTwo" aria-expanded="false" aria-controls="collapseCustomTwo">
                  Captures d'écran logiciel
                </button>
              </h5>
            </div>
            <div id="collapseCustomTwo" class="collapse" aria-labelledby="headingCustomTwo" data-parent="#accordionCustomExample">
              <div class="card-body">
              <a href="index.php?uc=administrer&action=stage1expo1" target="_blank">Presentation du logiciel</a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingCustomThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCustomThree" aria-expanded="false" aria-controls="collapseCustomThree">
                  Captures d'écran code
                </button>
              </h5>
            </div>
            <div id="collapseCustomThree" class="collapse" aria-labelledby="headingCustomThree" data-parent="#accordionCustomExample">
              <div class="card-body">
              <a href="index.php?uc=administrer&action=stage1expo2" target="_blank">Code du logiciel</a>
              </div>
            </div>
          </div>
        </div>