<link rel="stylesheet" type="text/css" href="<?php echo($resURL) ?>css/quickflip.css" />
<link rel="stylesheet" href="<?php echo($resURL) ?>css/journal.css" /> 
<h4><i class="fa fa-pencil-square-o"></i> Journal</h4>   
<script src="js/journal.js"></script>
<!-- ********************  journaling  ***********************************-->
<div class="quickFlip">
<dl class="quickFlipPanel">
<dd id="mood" class="quickFlipCta"><i class="fa fa-smile-o "></i>
           <label>Mood</label>                                   
        </dd>
        <dd id="loc" class="quickFlipCta"><i class="fa fa-map-marker"></i>
        <label>Occasion</label>
        </dd>
       
        <dd id="tags" class="quickFlipCta"><i class="fa fa-tags"></i>
           <label>Choose tags</label>
           
        </dd>
        <dd id="obj" class="quickFlipCta"><i class="fa fa-star"></i>
        <label>Performance</label>
           
        </dd>
       
        <!-- <dd id="att" class="quickFlipCta"><i class="fa fa-paperclip"></i><i class="fa fa-camera"></i><label>Attachment</lable></dd> -->
        <dd id="dev" class="quickFlipCta"><i class="fa fa-graduation-cap"></i><label>Learning</label></dd> 
        <dd id="360" class="quickFlipCta"><i class="fa fa-users"></i><label>360</label></dd> 
        <dd class="quickFlipCta"><i class="fa fa-lock"></i><label>Private</label></dd> 
        <dd><textarea placeholder="What is happening..."></textarea></dd>

     </dl>
   <div id="panel2" class="quickFlipPanel">
               <div class="mood panel quickFlipCta">
               		<img src="http://ipadnotebook.files.wordpress.com/2012/10/screenshot-2012-10-10-08-26-281.png?w=500&h=111" />
               </div>
               <div class="loc panel quickFlipCta">
                  <img src="img/journal/locations.png" />
               </div>
               <div class="obj panel quickFlipCta">
                  <ul class="obj_list">
                     <li><i class="fa fa-star-o"></i><span>Objectives - Growth</span></li>
                     <li><i class="fa fa-star-o"></i><span>Objectives - Own MNC</span></li>
                     <li><i class="fa fa-star-o"></i><span>Objectives - Scale </span></li>
                     <li><i class="fa fa-star-o"></i><span>Competencies</span></li>
                     <li><i class="fa fa-star-o"></i><span>Values</span></li>
                     <li><i class="fa fa-star-o"></i><span>Career, learning, & development</span></li>
                  </ul>     
                  <ul class="obj_sublist">
                     <li><i class="fa fa-star"></i><span>Personal Development Objective </span></li>
                     <li><i class="fa fa-star"></i><span>Employee accountabilities </span></li>
                     <li><i class="fa fa-star"></i><span>Process Effectiveness </span></li>
                     <li><i class="fa fa-star"></i><span>Team delivers project </span></li>
                  </ul>
               </div>
                <div class="tags panel quickFlipCta">
                  <p><input placeholder="enter tags"/></p>
                  <ul id="tag-cloud">
                     <li class="tag-cloud tag-cloud-info">1:1</li>
                     <li class="tag-cloud tag-cloud-warning">growth</li>
                     <li class="tag-cloud">communication</li>
                     <li class="tag-cloud tag-cloud-success">revenue</li>
                     <li class="tag-cloud tag-cloud-danger">development</li>
                     <li class="tag-cloud tag-cloud-info">effectiveness</li>
                     <li class="tag-cloud tag-cloud-inverse">delivery</li>
                     <li class="tag-cloud tag-cloud-warning">innovation</li>
                     <li class="tag-cloud">negotiation</li>
                     <li class="tag-cloud tag-cloud-success">problem solving</li>
                     <li class="tag-cloud tag-cloud-danger">quality</li>
                     <li class="tag-cloud tag-cloud-info">teamwork</li>
                     <li class="tag-cloud tag-cloud-inverse">zing</li>
                  </ul>
               </div>
               <div class="dev panel quickFlipCta">
                  <i class="fa fa-chevron-left"></i>
                  <p>Daniel has some ideas, will mock up some thing soon</p>
               </div>
               <div class="360 panel quickFlipCta">
                  <i class="fa fa-chevron-left"></i>
                  <p>Daniel is still thinking</p>
               </div>
               <div class="att panel quickFlipCta">
                  <i class="fa fa-chevron-left"></i>
                   <p>Daniel is still thinking</p>
               </div>
   </div>
 <br clear="both" />

</div>
<p><button class="btn" style="background:#0D6083; color:#fff">Add</button></p>