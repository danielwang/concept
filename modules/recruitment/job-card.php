<?php include '../../base.php' ?>
<?php startblock('page') ?>

 <div id="dockbody">
        <h2>Human Resources Officer</h2>
        <div class="row row-gap">
          <div class="col-sm-8">
            <div class="panel panel-default">
                   <div class="panel-heading">
                       <h3 class="panel-title">Position info</h3>
                   </div>
                   <div class="panel-body">
                  <?php include ("${resURL}components/_form.html"); ?>
                </div>
              </div>
          </div>
          <div class="col-sm-4">
              <?php include ("${resURL}components/_tabs.html"); ?>
          </div>
        </div>
      </div>
    </div>
<?php endblock() ?>
