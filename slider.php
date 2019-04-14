<style>

/*.fling-minislide {width:auto; height:300px; overflow:hidden; position:relative; }*/
.fling-minislide img{ position:absolute; animation:fling-minislide 20s infinite; opacity:0; width: 100%; height: 100%;}

@keyframes fling-minislide {25%{opacity:1;} 40%{opacity:0;}} 
    .fling-minislide img:nth-child(5){animation-delay:0s;}
.fling-minislide img:nth-child(4){animation-delay:5s;}
.fling-minislide img:nth-child(3){animation-delay:10s;}
.fling-minislide img:nth-child(2){animation-delay:15s;}
.fling-minislide img:nth-child(1){animation-delay:20s;}

.fling-minislide {width:100%; height:0px; padding-bottom: 35%; overflow:hidden; position:relative;}

</style>

<div class="fling-minislide">
  <img src="images/image1.jpg" alt="Slide 4" />
  <img src="images/image2.jpg" alt="Slide 3" />

  <img src="images/image3.jpg" alt="Slide 2" />
    <img src="images/image17.jpg" alt="Slide 5" />

<img src="images/image9.jpg" alt="Slide 1" />
    
</div>