<?php include '../base.php';?>
<?php startblock('page');?>
<div role="application" tabindex="-1">
    <form autocomplete="off">
        <div class="form-group">
            <label class="col-sm-4 control-label">Label</label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="placeholder" type="text">
                <span class="help-block">(optional)</span>
            </div>
        </div>
        <div id="cb1" class="form-group cb">

            <label class="col-sm-4 control-label" id="cb1-label" for="cb1-edit">State</label>
            <div class="col-sm-8">
                <div class="input-group pu-dropdown">
                    <input id="cb1-edit" class="form-control" type="text" tabindex="0" role="combobox" aria-labelledby="cb1-label" aria-autocomplete="inline" aria-owns="cb1-list"/>
                    <span class="input-group-btn">
                        <button id="cb1-button" aria-labelledby="cb1-button-label" aria-controls="cb1-list" tabindex="-1" class="btn" type="button">
                            <span class="caret"></span>
                        </button>
                    </span>
                    <div id="cb1-button-label" class="hidden">Open list of states</div>
                    <ul id="cb1-list" class="cb_list" tabindex="-1" role="listbox" aria-expanded="true">
                        <li id="cb1-opt1" role="option" class="cb_option">Alabama</li>
                        <li id="cb1-opt2" role="option" class="cb_option">Alaska</li>
                        <li id="cb1-opt3" role="option" class="cb_option">American Samoa</li>
                        <li id="cb1-opt4" role="option" class="cb_option">Arizona</li>
                        <li id="cb1-opt5" role="option" class="cb_option">Arkansas</li>
                        <li id="cb1-opt6" role="option" class="cb_option">California</li>
                        <li id="cb1-opt7" role="option" class="cb_option">Colorado</li>
                        <li id="cb1-opt8" role="option" class="cb_option">Connecticut</li>
                        <li id="cb1-opt9" role="option" class="cb_option">Delaware</li>
                        <li id="cb1-opt10" role="option" class="cb_option">District of Columbia</li>
                        <li id="cb1-opt11" role="option" class="cb_option">Florida</li>
                        <li id="cb1-opt12" role="option" class="cb_option">Georgia</li>
                        <li id="cb1-opt13" role="option" class="cb_option">Guam</li>
                        <li id="cb1-opt14" role="option" class="cb_option">Hawaii</li>
                        <li id="cb1-opt15" role="option" class="cb_option">Idaho</li>
                        <li id="cb1-opt16" role="option" class="cb_option selected">Illinois</li>
                        <li id="cb1-opt17" role="option" class="cb_option">Indiana</li>
                        <li id="cb1-opt18" role="option" class="cb_option">Iowa</li>
                        <li id="cb1-opt19" role="option" class="cb_option">Kansas</li>
                        <li id="cb1-opt20" role="option" class="cb_option">Kentucky</li>
                        <li id="cb1-opt21" role="option" class="cb_option">Louisiana</li>
                        <li id="cb1-opt22" role="option" class="cb_option">Maine</li>
                        <li id="cb1-opt23" role="option" class="cb_option">Maryland</li>
                        <li id="cb1-opt24" role="option" class="cb_option">Massachusetts</li>
                        <li id="cb1-opt25" role="option" class="cb_option">Michigan</li>
                        <li id="cb1-opt26" role="option" class="cb_option">Minnesota</li>
                        <li id="cb1-opt27" role="option" class="cb_option">Mississippi</li>
                        <li id="cb1-opt28" role="option" class="cb_option">Missouri</li>
                        <li id="cb1-opt29" role="option" class="cb_option">Montana</li>
                        <li id="cb1-opt30" role="option" class="cb_option">Nebraska</li>
                        <li id="cb1-opt31" role="option" class="cb_option">Nevada</li>
                        <li id="cb1-opt32" role="option" class="cb_option">New Hampshire</li>
                        <li id="cb1-opt33" role="option" class="cb_option">New Jersey</li>
                        <li id="cb1-opt34" role="option" class="cb_option">New Mexico</li>
                        <li id="cb1-opt35" role="option" class="cb_option">New York</li>
                        <li id="cb1-opt36" role="option" class="cb_option">North Carolina</li>
                        <li id="cb1-opt37" role="option" class="cb_option">North Dakota</li>
                        <li id="cb1-opt38" role="option" class="cb_option">Northern Marianas Islands</li>
                        <li id="cb1-opt39" role="option" class="cb_option">Ohio</li>
                        <li id="cb1-opt40" role="option" class="cb_option">Oklahoma</li>
                        <li id="cb1-opt41" role="option" class="cb_option">Oregon</li>
                        <li id="cb1-opt42" role="option" class="cb_option">Pennsylvania</li>
                        <li id="cb1-opt43" role="option" class="cb_option">Puerto Rico</li>
                        <li id="cb1-opt44" role="option" class="cb_option">Rhode Island</li>
                        <li id="cb1-opt45" role="option" class="cb_option">South Carolina</li>
                        <li id="cb1-opt47" role="option" class="cb_option">South Dakota</li>
                        <li id="cb1-opt48" role="option" class="cb_option">Tennessee</li>
                        <li id="cb1-opt49" role="option" class="cb_option">Texas</li>
                        <li id="cb1-opt50" role="option" class="cb_option">Utah</li>
                        <li id="cb1-opt51" role="option" class="cb_option">Vermont</li>
                        <li id="cb1-opt52" role="option" class="cb_option">Virginia</li>
                        <li id="cb1-opt53" role="option" class="cb_option">Virgin Islands</li>
                        <li id="cb1-opt54" role="option" class="cb_option">Washington</li>
                        <li id="cb1-opt55" role="option" class="cb_option">West Virginia</li>
                        <li id="cb1-opt56" role="option" class="cb_option">Wisconsin</li>
                        <li id="cb1-opt57" role="option" class="cb_option">Wyoming</li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>

<?php endblock()?>
