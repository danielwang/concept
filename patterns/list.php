<?php include '../base.php';?>
<?php startblock('page');?>
<div class="row row-gap">
	<div class="col-sm-3">
	    <h2>Page title</h2>
	</div>
	<div class="col-sm-9 col-md-6">
		<div class="alert alert-info">
		  <strong>Info Message!</strong> Consequatur facere deleniti cumque <a class="alert-link" href="">link</a> ducimus maiores nemo.
		  <button href="#" type="button" class="close"><i class="glyphicon glyphicon-remove"></i></button>
		</div>
	</div>
</div>
<div class="pu-box">
    <div class="pu-box-title">
        <h4>Table name</h4>
    </div>
    <div class="pu-box-content">
        <div class="row">
            <div class="col-sm-2">
                <select class="input-sm form-control input-s-sm inline">
                    <option value="0">Option 1</option>
                    <option value="1">Option 2</option>
                    <option value="2">Option 3</option>
                    <option value="3">Option 4</option>
                </select>
            </div>
            <div class="col-sm-8">
                <div data-toggle="buttons" class="btn-group">
                    <label class="btn btn-sm btn-white">
                        <input id="option1" name="options" type="radio"> Day </label>
                    <label class="btn btn-sm btn-white active">
                        <input id="option2" name="options" type="radio"> Week </label>
                    <label class="btn btn-sm btn-white">
                        <input id="option3" name="options" type="radio"> Month </label>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-group">
                    <input placeholder="Search" class="input-sm form-control" type="text"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-info"> Go</button> </span></div>
            </div>
        </div>
		<?php include '../_partials/_table.html';?>
	</div>
</div>

<?php endblock()?>
