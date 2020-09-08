
<body>
  <div class='masthead' style="color:black;">
    <div class="container col-8">
      <div class="jumbotron jumbotron-sm" style="background-color:#fff5;">
        <div style="height:180px;">
          <img class="rounded mx-auto d-block" src="images/Stage2/Logo_TF.png" style="width:2s0%;height:auto;align:center;" alt="">
        </div>
        <div class="container"style="height:100px;"></div>
            


        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Qui est TF ?
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <?php
                include("vues/text_stage2.php");
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
                  include("vues/text_stage2_2.php");
                ?>
              </div>
            </div>
          </div>
        </div>
        </div>

        <div class="container" style="height:50px;"></div>
