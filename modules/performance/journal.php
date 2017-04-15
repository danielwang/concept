<?php include '../../base.php'?>
<?php startblock('page')?>
	<div class="row row-gap">
		<div class="col-md-6 col-md-offset-3">
            <?php include ("${resURL}components/_journal.php");?>
            <?php include ("${resURL}components/_timeline.php");?>
        </div>
    </div>
<?php endblock()?>
