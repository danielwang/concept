<?php include '../base.php'?>
<?php startblock('page')?>
<h2>Simon Cariss - My Contribution and Career Plan</h2>
<div id="performance">
  <div class="row row-gap">

    <div class="col-sm-10">
         <?php include '../_partials/_item.php';?>
         <?php for ($x = 0; $x <= 5; $x++) {?>
          <div class="item box row collaps">
            <h4>Develop sustainable reliability plans to meet standard scheme <span class="status">Current</span></h4>
             <span class="pull-right">
              <div class="calendar xs">
                <div class="month">Jan</div>
                <div class="day">1</div>
                <div class="year">2016</div>
              </div>
            </span>
            <span class="pull-right">
              <div class="c100 orange xs p15">
                  <span>15%</span>
                  <div class="slice">
                      <div class="bar"></div>
                      <div class="fill"></div>
                </div>
              </div>
            </span>

          </div>
         <?php }?>
    </div>
    <div class="col-sm-2">
        <ul class="sidenav affix" data-spy="affix" data-offset-top="150">
          <li><a href="#">Start</a></li>
          <li class="active">
            <a href="#">My Contribution</a>

          </li>
          <li><a href="#">Career plan</a></li>
          <li><a href="#">Next Step</a></li>
        </ul>
    </div>
  </div>
</div>
<?php endblock()?>