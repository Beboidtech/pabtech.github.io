<html>
    <title>pabcreative</title>
    <style>
        
        
        .nav li{
            float:left;
            padding: inherit;
            display:inline-block;
        }
       .nav li a {
    color: white;
    padding: 20px 30px;
    text-decoration: none;
          
}
 .nav li a:hover {
    color: #99c2ff;
}
        .logo{
            margin-top: 0px;
            
        }
        .one{

            float: right;
            margin-right: 0px;
        }
        .logo{
            float:right;
            
        }
        .logo h1{
            font-family: sans-serif;
            font-size: 45px;
            color: firebrick;
        }
         .nav{width:83%;
        height:8%; 
        margin-top:0%;
        background-color:saddlebrown;
             top: 0;
    z-index: 100;
    border-top: 0;
    box-shadow: 0 2px 3px rgba(0,0,0,.4);
             position: fixed;
        
        
        } 
        .maini_gallery{
  background: white;
  width: 100%;
  height: auto;
            
    
}
div.gallery {
    margin-left: 25px;
    height: auto;
    width: 270px;
}


div.desc {
    padding: 8px;
    text-align: center;
}
       .gallery{
            page-break-after: auto;
            padding-top: 100px;
            padding-left: 45px;  
        }
        .mimi{
            width:100%;
        height:8%; 
        margin-top:0%;
        background-color:saddlebrown;
            
    box-shadow: 0 2px 3px rgba(0,0,0,.4);
             
        }
        .mimi li{
            float:left;
            padding: inherit;
            display:inline-block;
            text-align: center;
            font-family: sans-serif;
            font-size: 45;
           
        }
        ul{
            font-family: sans-serif;
            font-size: 17px;
        }
        strong{
            color: white;
        }
       
        
    </style>
  
    <body>
         <div  style="margin:-9px;">
      <div  style="width:83%;margin:0px auto;padding-top: 50px;font-family: time;">
          
       
       <div class="nav">
           
<ul>
    <li><a href=""style="float:left; position:static"><img style="width: 110px;height: 58px; border-radius:50%;opacity:1px;margin-top:-40px;margin-left:-6.4em" src="image/pab4.jpg" alt="pab logo"></a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="services.php">Service</a></li>
            <li><a href="about.php">About </a></li>
            <li><a href="">Location</a></li>
              
            </ul>  
        </div>
        <div class="search">
         <table style= "width:100%" >
             
             <td class="logo">
            <h1>Pabtech Creative</h1>
                 </td>
             
        <td>
                 <div class="one">
                  <form action="search.php" method="POST">
                        <input style="width: 200px;height: 25px;font-size: 15;border-radius: 9px;border: 1px solid #0066ff" type="text" name="search" placeholder="Search..." />
                        <button style="width: 60px;height: 25px;font-size: 15;border-radius: 9px;border: 1px solid #0066ff;text-align: center;" type="submit" name="submit-search">Search</button>
                  </form>
                    </div>
      
             </td>
           
        </table>
      </div>
            
        <?php
        include'slider.php';
        
        ?><div>
          <h1>PabtechCreative</h1>
          <ul>
            Aim at providing quality services to client on different part<br> of technologies such as the installation of system security<br>,graphical design,website development and system design.
          </ul>
          </div>
        <hr>
           <div class="mimi">
           
<ul>
    <li><strong>News and Updates</strong></li>
            </ul>  
        </div>
          <div class="maini_gallery">
              <table>
                  <tr>
<td class="gallery">
    <img src="images/image28.jpg" alt="Forest" width="300" height="200">
  
  <div class="desc">Monitor displaying after the installation </div>
</td>

<td class="gallery">
    <img src="images/image21.jpg" alt="Forest" width="300" height="200">

  <div class="desc">Checking camera </div>
</td>

<td class="gallery">
    <img src="images/image22.jpg" alt="Northern Lights" width="300" height="200">
  
  <div class="desc">connecting cameras</div>
</td>
                  </tr>
                  <br><br>
                  
                  <tr>
            
<td class="gallery">
    <img src="images/image27.jpg" alt="Mountains" width="300" height="200">
  
  <div class="desc">New product </div>
</td>

<td class="gallery">
    <img src="images/image30.jpg" alt="Forest" width="300" height="200">
  
  <div class="desc">Testing</div>
</td>

<td class="gallery">
    <img src="images/image20.jpg" alt="Forest" width="300" height="200">

  <div class="desc">Our product</div>
    
</td>
                  </tr>
                       <br><br>
                  
                  <tr>
            
<td class="gallery">
    <img src="images/image26.jpg" alt="Mountains" width="300" height="200">
  
  <div class="desc">Preparing for connection</div>
</td>

<td class="gallery">
    <img src="images/image31.jpg" alt="Forest" width="300" height="200">
  
  <div class="desc">Our product</div>
</td>

<td class="gallery">
    <img src="images/image11.jpg" alt="Forest" width="300" height="200">

  <div class="desc">Our product</div>
</td>
                  </tr>
    </table>         

</div>
             
           <?php
        include'footer.php';
        
        ?>

           </div>
        </div>
    </body>
</html>
