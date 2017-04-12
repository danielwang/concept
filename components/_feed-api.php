<link href="css/timeline.css" rel="stylesheet" type="text/css" />
<div aria-label="Small button group" role="group" class="btn-group btn-group-sm">
  <button class="btn btn-primary" type="button">Company</button>
  <button class="btn btn-white" type="button">Department</button>
  <button class="btn btn-white" type="button">Team</button>
</div>
<div class="vertical-container light-timeline" id="vertical-timeline">
             
</div>
<script type="text/javascript">
    setInterval(function() {   

    }, 10000);
    $.getJSON("http://pu-ws-138:9000/updates/developmentactivity", function(data) {

        $.each(data, function(i, item) {
           var feeds = feedTemplate(item);
           $("#vertical-timeline").append(feeds);

        });

    });   
  function feedTemplate(item){
    var feed="";
        feed += "<div class=\"vertical-timeline-block\">";
        feed += "               <div class=\"vertical-timeline-icon orange-bg mgr\">";
        feed += "                   <img class=\"avatar\" src=\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQSrN2p9jS_py5ETq9PFxVuCKY92kpUg08Y7NJGT87lC97Ik1ohqQ\">         ";
        feed += "               <\/div>";
        feed += "";
        feed += "               <div class=\"vertical-timeline-content\">";
        feed += "                   <h5> <a href=\"#\">"+ item.sFullName + "<\/a> " + item.activityUpdate+ "<\/h5>";
        feed += "                   <span class=\"vertical-date\">";
        feed += "                       <small>"+ item.providerLastUpdated+"<\/small>   ";
        feed += "                   <\/span>  ";
        feed += "                   <div class=\"learning-card well media\">";
        feed += "                       <div class=\"media-left\">";
        feed += "                           <a href=\"#\">";
        feed += "                             <img class=\"media-object\" src=\"http:\/\/pageuppeoplecareers.com\/wp-content\/uploads\/2013\/07\/IMG_8107-438x228.jpg\">";
        feed += "                           <\/a>";
        feed += "                       <\/div>";
        feed += "                       <div class=\"media-body\">";
        feed += "                           <h5 class=\"media-heading\"><a href=\"#\">"+ item.sTitle +"<\/a><\/h5>";
        feed += "                           Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.";
        feed += "                       <\/div>";
        feed += "                   <\/div>";
        feed += "                   <div class=\"actions\">";
        feed += "                       <a class=\"btn btn-xs btn-white\"><i class=\"fa fa-thumbs-up\"><\/i> Like<\/a>";
        feed += "                       <a class=\"btn btn-xs btn-white\"><i class=\"fa fa-plus\"><\/i> Add <\/a>";
        feed += "                       <a class=\"btn btn-xs btn-white\"><i class=\"fa fa-share\"><\/i> Share<\/a>";
        feed += "                   <\/div>";
        feed += "               <\/div>";
        feed += "           <\/div> ";

    return feed;    
  }
</script> 
<style type="text/css">
h5{
	margin:0;
}
.learning-card img{
    width: 100px;
}
.well {
    background-color: #f9f9f9;
    border: 1px solid #eee;
    border-radius: 0;
    box-shadow: none;
    margin-bottom: 5px;
}
.vertical-timeline-content .btn {
    float: none;
}
.media {
    margin-top: 10px;
    font-size: 11px;
}

.vertical-timeline-icon .avatar {
    border: 3px solid #ffa500;
    margin: -15px -20px;
    width: 45px;
}
</style>

