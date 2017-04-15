<?php include 'base.php';?>
<?php startblock('page');?>
<div class="row row-gap">
  <div class="col-sm-4">
     <?php include ("${resURL}components/widgets/event.html");?>
     <?php include ("${resURL}components/widgets/task.html");?>
  </div>
  <div class="col-sm-3">
      <?php include ("${resURL}components/widgets/profile.html");?>
      <?php include ("${resURL}components/widgets/jobs.html");?>
  </div>
  <div id="middleColumn" class="col-sm-5">
      <?php include ("${resURL}components/_social-feed.php");?>
  </div>
</div>
<?php endblock()?>
