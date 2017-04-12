<nav class="navbar navbar-default">
    <div class="container<?php echo ($layout) ?>">
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="<?php echo ($resURL) ?>index"><img width="80" src="<?php echo ($resURL) ?>img/pu-logo.png"/></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav main-nav">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="pu-icon pu-icon-logo"></i>&nbsp;&nbsp;PU Modules <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <?php
$folder = "{$resURL}modules";
listElementsAsOptions($folder);
?>
                        </ul>
                    </li>
                    <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-th fa-lg"></i>&nbsp; Layouts<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Page Layouts</li>
                            <li><a href="<?php echo ($resURL) ?>layouts/fluid">Fluid</a></li>
                            <li><a href="<?php echo ($resURL) ?>layouts/fixed-width">Fixed width</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Content templates</li>
                            <li><a href="<?php echo ($resURL) ?>layouts/content-only">Content Only</a></li>
                            <li><a href="<?php echo ($resURL) ?>layouts/sidebar-content">Sidebar and content</a></li>
                            <li><a href="<?php echo ($resURL) ?>layouts/content-aside">Content and aside</a></li>
                            <li><a href="<?php echo ($resURL) ?>layouts/three-columns">Three Columns</a></li>
                            <li><a href="<?php echo ($resURL) ?>layouts/modal">Focused task</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-puzzle-piece fa-lg"></i>&nbsp; Patterns <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <?php $folder = "{$resURL}patterns";
listElementsAsOptions($folder)
;?>
                        </ul>
                    </li>
                    <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-lg fa-coffee"></i>&nbsp; Relax  <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a target="_black" href="apps/map"> Map</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><button class="btn btn-info btn-sm margin-right">Action</button></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle head-button-link"><span class="notice-new">3</span><i class="pu-icon pu-icon-bell"></i></a>
                    </li>
                    <li class="dropdown loginAs"> <span data-toggle="dropdown" class="dropdown-toggle" href="#"><img src="<?php echo ($resURL) ?>img/emp/emp.jpg" class="pu-avatar pu-avatar-sm" /> Daniel <b class="caret"></b></span>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Profile</a>
                            </li>
                            <li><a href="#">Journal</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li id="user-setting" class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#_"><i class="pu-icon pu-icon-cogs"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                         <li>User Type :</li>
                         <li class="manager"><a data-attr="manager" href="#"> Manager</a> </li>
                         <li class="employee"><a data-attr="employee" href="#"> Employee</a> </li>
                        </ul>
                    </li>
                </ul>
                <!-- search box -->
                <form role="search" id="search" class="navbar-form app-only">
                    <div class="input-group">
                        <span class="input-group-addon"> <i class="fa fa-search"></i> </span>
                        <input type="text" placeholder="Search" class="form-control search-box">
                    </div>
                    <label id="pin-btn" class="checkbox__label">
                      <input id="toggle-view" class="checkbox hide" type="checkbox">
                      <span class="pin__track">
                        <span class="pin">
                          <span class="pin__component__wrapper">
                            <i class="fa fa-lg fa-thumb-tack" aria-hidden="true"></i>
                          </span>
                        </span>
                      </span>
                    </label>
                </form>
            </div>
    </div>
</nav>
