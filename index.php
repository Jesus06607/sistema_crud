<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 90px;
  text-align: center;
  background-image:url('img/pcarmy.jpeg');
  color: white;
}

/* Increase the font size of the heading */
.header h1{
  font-size: 80px;
}

.header p {
    font-size: 20px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #e56421;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #0b2c62;
  padding: 20px;
  color: #f2f2f2;
}


/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: #096ccc;
  padding: 20px;
  color: #fbfcf9;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Pc Army</h1>
  <p>Tu mejor opcion para optimizar tu equipo</p>
</div>

<div class="navbar">
 
  <a href="login.HTML" class="right">Login</a>
</div>

<div class="row">
    <div class="side">
        <h1>Las mejores ofertas !!</h1>
        <h3>Precios comparados:</h3>
        
        <h3>
            <ul> 
            <li><b>Amazon</b> </li>
            <li><b>Mercado Libre</b></li>
            <li><b>Cyber Puerta</b></li>
            <li><b>Coppel</b></li>
             </ul>
        </h3>
        <div class="fakeimg" > <img src="img/prom1.png" alt="" style="height:200px;"> </div>
        
        <h3></h3>
        <p>Conoce nuestras marcas de 1er nivel</p>
        <div class="fakeimg" > <img src="img/amd.jpg" alt="" style="height:180px; padding: 0;"> <h3>AMD</h3> </div><br>
        <div class="fakeimg" ><img src="img/asus.png" alt="" style="height: 180px;"> <h3>ASUS</h3></div><br>
   
    </div>


    <div class="main">
        <!-- Carrusel principal -->
        <style>
            * {box-sizing: border-box;}
            .mySlides {display: none;}
            img {vertical-align: middle;}
            
            /* Slideshow container */
            .slideshow-container {
              max-width: 1000px;
              position: relative;
              margin: auto;
            }
            
            /* Caption text */
            .text {
              color: #f2f2f2;
              font-size: 15px;
              padding: 8px 12px;
              position: absolute;
              bottom: 8px;
              width: 100%;
              text-align: center;
            }
            
            /* Number text (1/3 etc) */
            .numbertext {
              color: #0396f842;
              font-size: 12px;
              padding: 8px 12px;
              position: absolute;
              top: 0;
            }
            
            /* The dots/bullets/indicators */
            .dot {
              height: 15px;
              width: 15px;
              margin: 0 2px;
              background-color: #bbb;
              border-radius: 50%;
              display: inline-block;
              transition: background-color 0.6s ease;
            }
            
            .active {
              background-color: #717171;
            }
            
            /* Fading animation */
            .fade {
              animation-name: fade;
              animation-duration: 1.5s;
            }
            
            @keyframes fade {
              from {opacity: .4} 
              to {opacity: 1}
            }
            
            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
              .text {font-size: 11px}
            }
            </style>
            
            <div class="slideshow-container">
            
            <div class="mySlides fade">
              <div class="numbertext">1 / 5</div>
              <img src="img/com1.webp" style="width:100%">
              
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 5</div>
              <img src="img/com5.webp" style="width:100%">
              
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 5</div>
              <img src="img/com2.webp" style="width:100%">
             
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="img/com3.webp" style="width:100%">
                
              </div>

              <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="img/com4.webp" style="width:100%">
                
              </div>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
            
            <script>
            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 3000); // Change image every 3 seconds
            }
            </script>

            <!------------------------------  CUADRICULA DE IMAGENES ---------------------------->

            <style>
                div.gallery {
                  border: 1px solid #ccc;
                }
                
                div.gallery:hover {
                  border: 1px solid #777;
                }
                
                div.gallery img {
                  width: 100%;
                  height: auto;
                }
                
                div.desc {
                  padding: 15px;
                  text-align: center;
                }
                
                * {
                  box-sizing: border-box;
                }
                
                .responsive {
                  padding: 0 6px;
                  float: left;
                  width: 24.99999%;
                }
                
                @media only screen and (max-width: 700px) {
                  .responsive {
                    width: 49.99999%;
                    margin: 6px 0;
                  }
                }
                
                @media only screen and (max-width: 500px) {
                  .responsive {
                    width: 100%;
                  }
                }
                
                .clearfix:after {
                  content: "";
                  display: table;
                  clear: both;
                }
                </style>
                </head>
                <body>
                
                <h2>Responsive Image Gallery</h2>
                
                <h4>Resize the browser window to see the effect.</h4>
                
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="#">
                      <img src="prod/len1.png" alt="Cinque Terre" width="600" height="400">
                    </a>
                    <div class="desc"><b>Think Pad E15 3era Gen</b></br> <b>(15.6", AMD)</b></div>
                  </div>
                </div>
                
                
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="">
                      <img src="prod/len3.png" alt="Forest" width="600" height="400">
                    </a>
                    <div class="desc"><b>Think Pad X1 Carbon 9na Gen</b></br> <b>(14", Intel)</b></div>
                  </div>
                </div>
                
                
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="">
                      <img src="prod/len2.png" alt="Forest" width="400" height="300">
                    </a>
                    <div class="desc"><b>IdeadPad 3i 6ta Gen</b></br> <b>(15.6", Intel)</b></div>
                  </div>
                </div>
                
                
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="">
                      <img src="prod/len4.png" alt="Forest" width="600" height="400">
                    </a>
                    <div class="desc"><b>Yoga Slim 7</b></br> <b>(14", Intel)</b></div>
                  </div>
                </div>
 
                
                
               
                
                <div class="responsive">
                    <div class="gallery">
                      <a target="_blank" href="">
                        <img src="prod/len5.png" alt="Forest" width="600" height="400">
                      </a>
                      <div class="desc"><b>Legion 5i15" 7ma Gen</b></br> <b>(Cloud Grey)</b></div>
                    </div>
                  </div>
                
                <div class="clearfix"></div>


    </div>
</div>

<div class="footer">
  <h2>PcArmi @2023</h2>

</div>

</body>
</html>
