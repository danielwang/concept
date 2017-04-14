<?php include '../base.php';?>
<link href="css/dashboard.css" rel="stylesheet" type="text/css" />
      <div id="dockbody">
        <h2>Dock page</h2>
        <div class="row row-gap">
          <div class="col-sm-4">
             <?php include 'components/widgets/event.html';?>
             <?php include 'components/widgets/task.html';?>
          </div>
          <div class="col-sm-3">
              <?php include 'components/widgets/profile.html';?>

              <div class="box">
                <img width="262" src="img/side2.PNG" style="margin-left: -20px;"/>
              </div>

              <?php include 'components/widgets/jobs.html';?>
          </div>
          <div id="middleColumn" class="col-sm-5">
                <?php include 'components/_social-feed.php';?>
          </div>
        </div>
      </div>
    </div>
