<?php include '../../base.php'?>
<?php startblock('page')?>
<style type="text/css">
.side .row {
      margin-bottom: 20px;
      padding-bottom: 5px;
  }
.side i {
    color: #40B8E6;
  }
.side .dash {
      border-bottom: 1px dashed #ddd;
      padding-bottom: 5px;
  }
</style>

   <h2>Talent Mobility</h2>
      <div class="row">
          <div class="col-sm-8">
            <div class="pu-box">
              <div class="pu-box-content">
              <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
              <p>Ut wisi enim ad minim veniam, <a href="#">quis nostrud exerci tation ullamcorper</a> suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              <h3>Paragraphs</h3>
              <img class="img-responsive" src="http://wwwstatic.pageuppeople.com/wp-content/uploads/2015/03/mobile-blog-pic2.jpg" />
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
              <h3>Paragraphs</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
              <h3>Unordered list</h3>
<p>Unordered lists are used to markup lists where list items do not require numbering.</p>
<ul>
  <li>Ut wisi enim ad minim veniam</li>
  <li>Quis nostrud exerci tation</li>
  <li>Lamcorper suscipit lobortis nis</li>
  <li>Ut aliquip ex ea commodo consequat</li>
  <li>Duis autem vel eum iriure dolor</li>
</ul>
              </div>
              <div class="pu-box-footer text-center">
                  <button class="btn btn-primary">Action</button>
              </div>
            </div>
          </div>
          <div class="col-sm-4 side">
            <div ng-show="activity.status" class="row">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-info fa-fw"></i> <span lang="STATUS">Status</span></div>
                <div class="col-sm-6 col-lg-8 dash ng-binding">In progress</div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-user fa-fw"></i> <span lang="CREATED_BY">Created by</span></div>
                <div class="col-sm-6 col-lg-8 dash ng-binding"><img class="pu-avatar pu-avatar-sm" src="../img/emp/emp.jpg"> Daniel Wang</div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-clock-o fa-fw"></i> <span lang="APPLICANT_CREATE_DATE">Created</span></div>
                <div class="col-sm-6 col-lg-8 dash activity-created-date ng-binding">21 Aug 15</div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-files-o fa-fw"></i> <span lang="TYPE">Type</span></div>
                <div class="col-sm-6 col-lg-8 dash ng-binding">Online Video Learning</div>
            </div>
            <div ng-show="activity.validity !== 0" class="row ng-hide">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-history fa-fw"></i> <span lang="VALID_FOR">Valid for</span></div>
                <div class="col-sm-6 col-lg-8 dash ng-binding">0 <span lang="DAYS">Days</span></div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-thumbs-o-up fa-fw"></i> <span lang="POPULARITY">Popularity</span>
                </div>
                <div class="col-sm-6 col-lg-8 dash">
                  <img class="pu-avatar pu-avatar-sm" src="../img/emp/emp1.png"><img class="pu-avatar pu-avatar-sm" src="../img/emp/emp2.png">
                  <img class="pu-avatar pu-avatar-sm" src="../img/emp/emp3.png"><img class="pu-avatar pu-avatar-sm" src="../img/emp/emp4.png">
                  <img class="pu-avatar pu-avatar-sm" src="../img/emp/emp5.png"><img class="pu-avatar pu-avatar-sm" src="../img/emp/emp6.png">
                  <img class="pu-avatar pu-avatar-sm" src="../img/emp/emp7.png"><img class="pu-avatar pu-avatar-sm" src="../img/emp/emp8.png">
                  <img class="pu-avatar pu-avatar-sm" src="../img/emp/emp9.png"><img class="pu-avatar pu-avatar-sm" src="../img/emp/emp10.png">
                  <img class="pu-avatar pu-avatar-sm" src="../img/emp/emp11.png"><img class="pu-avatar pu-avatar-sm" src="../img/emp/emp12.png">
                </div>
            </div>


            <div ng-show="activity.competencies.length !== 0">
            <h5 lang="COMPETENCIES">Competencies</h5>

            <!-- ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Introducing original ideas; applying new methods; being creative." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Innovation</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Innovation </span>
                - <span class="level ng-binding">People Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Introducing original ideas; applying new methods; being creative." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Innovation</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Innovation </span>
                - <span class="level ng-binding">Technical Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Introducing original ideas; applying new methods; being creative." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Innovation</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Innovation </span>
                - <span class="level ng-binding">Business Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Creating and defining a broad, compelling organisational vision, and organising and inspiring others to pursue it." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Leadership (Strategic)</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Leadership (Strategic) </span>
                - <span class="level ng-binding">Team Member</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Creating and defining a broad, compelling organisational vision, and organising and inspiring others to pursue it." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Leadership (Strategic)</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Leadership (Strategic) </span>
                - <span class="level ng-binding">People Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Creating and defining a broad, compelling organisational vision, and organising and inspiring others to pursue it." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Leadership (Strategic)</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Leadership (Strategic) </span>
                - <span class="level ng-binding">Technical Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Creating and defining a broad, compelling organisational vision, and organising and inspiring others to pursue it." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Leadership (Strategic)</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Leadership (Strategic) </span>
                - <span class="level ng-binding">Business Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies -->
          </div>
          </div>
       </div>
   </div>
<?php endblock()?>
