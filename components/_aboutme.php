<nav class="circular-menu">

  <div class="aboutme circle open">
    <a href="#">
        <span class="pu-square small red-bg">
                <span><i class="fa fa-user"></i></span>            
            </span> 
            <span>My profile</span> 
     </a>     
    <a href="learning.php">
      <span class="pu-square small orange-bg">
          <span><i class="fa fa-graduation-cap"></i></span>
      </span>
      <span>Learning</span>    
    </a>

    <a href="journal.php">
      <span class="pu-square small purple-bg">
        <span><i class="fa fa-pencil-square-o"></i></span>
       
      </span> 
      <span>Journal</span>   
    </a>

    <a href="performance.php">
              <span class="pu-square small green-bg">
                <i class="fa fa-star"></i>
              </span>
              <span>Performance</span>             
          </a>
     <a href="#">
        <span class="pu-square small blue-bg">
                <span><i class="fa fa-users"></i></span>            
            </span> 
            <span>Employee Search</span> 
     </a> 
     <a href="#">
        <span class="pu-square small sushi-bg">
                <span><i class="fa fa-code-fork"></i></span>            
            </span> 
            <span>Career Path</span> 
     </a>
     <a href="#">
        <span class="pu-square small blue-bg">
                <span><i class="fa fa-user-plus"></i></span>            
            </span> 
            <span>Recruitment</span> 
     </a>        
  </div>
  
  <img class="avatar menu-button" src="img/emp/emp.jpg">

</nav>

<script type="text/javascript">
var items = document.querySelectorAll('.aboutme a');

for(var i = 0, l = items.length; i < l; i++) {
  items[i].style.left = (50 - 35*Math.cos(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
  
  items[i].style.top = (50 + 35*Math.sin(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
}

document.querySelector('.menu-button').onclick = function(e) {
   e.preventDefault(); document.querySelector('.circle').classList.toggle('open');
}
</script>
