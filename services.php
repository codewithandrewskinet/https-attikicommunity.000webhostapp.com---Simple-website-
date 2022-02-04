<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ATTIKI TEAM</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/c62ad8cf0c.js" crossorigin="anonymous"></script>
    </head>
    <body>
             <nav id="navBar" class="navbar-white">
                <img src="images/logo-2.png" class="logo">    
                <ul class="nav-links">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="listing.php">Services</a></li>                   
                    <li><a href="#">Company</a></li>               
                </ul>
                <a href="#" class="register-btn">Follow</a>
                <i class="fas fa-bars" onclick="togglebtn()"></i>
            </nav>
            <div class="container">
                <div class="list-container">
                                    <div class="left-col">
                                    <p>10+ Options</p>
                                    <h1>Why do we use it?</h1>
                                    <div class="Complatt">
                                        <div class="Complatt-img">
                                            <img src="images/Redroom-1.png">
                                        </div>
                                            <div class="Complatt-info">
                                                <p>Finished</p>
                                                <h3>Demir Georgiso</h3>
                                                <p>Why do we use it?</p>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                        </div> 
                                    </div>
                                   <div class="Complatt">
                                        <div class="Complatt-img">
                                            <img src="images/Redroom-2.png">
                                        </div>
                                            <div class="Complatt-info">
                                                <p>Finished</p>
                                                <h3>Demir Georgiso</h3>
                                                <p>Why do we use it?</p>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                        </div> 
                                    </div>
                                    <div class="Complatt">
                                        <div class="Complatt-img">
                                            <img src="images/Redroom-3.png">
                                        </div>
                                            <div class="Complatt-info">
                                                <p>Finished</p>
                                                <h3>Demir Georgiso</h3>
                                                <p>Why do we use it?</p>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                        </div> 
                                    </div>
                      </div>
                    <div class="right-col">
                        <div class="sidebar">
                            <h2>Select Filter</h2>
                            <h3>Property Type</h3>
                            <div class="filter">
                            <input type="checkbox"> <p>NEW 1</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>NEW 2 </p> <span>(0)</span>
                        </div>
                       <div class="filter">
                            <input type="checkbox"> <p>NEW 3 </p> <span>(0)</span>
                        </div>
                       <div class="filter">
                            <input type="checkbox"> <p>NEW 4 </p> <span>(0)</span>
                       </div>
                            <h3>NEW - NEW</h3>
                        <div class="filter">
                            <input type="checkbox"> <p>Greece</p> <span>(0)</span>
                       </div> 
                            <div class="filter">
                            <input type="checkbox"> <p>Bulgaria</p> <span>(0)</span>
                       </div>
                       <div class="sidebar-link">
                          <a href="#">View More</a>
                        </div>
                      </div>
                    </div>
                </div>
                   <div class="pagination">
                    <img src="images/arrow.png">
                    <span class="current">1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>5</span>
                    <span>&middot; &middot; &middot; &middot;</span>
                    <span>20</span>
                    <img src="images/arrow.png" class="right-arrow">
                   </div> 
                <div class="footer">
                            <a href="https://github.com/hiphopecc1"><i class="fab fa-php"></i></a>
                            <a href="https://github.com/hiphopecc1"><i class="fab fa-github"></i></a>
                            <a href="https://attiki.de/en/datenschutz/"><i class="far fa-building"></i></a>
                            <a href="https://www.youtube.com/watch?v=MiUTU0opCV4"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.facebook.com/ATTIKI-Industrieservice-GmbH-1519492678074615"><i class="fab fa-facebook-f"></i></a>
                            <hr>
                            <!--********************************************* Footer end *********************************************-->
                            <p>This website is Coded & assembled by : <span style="color: #0099cc; cursor: pointer; " onclick="window.open('https://www.facebook.com/profile.php?id=100009974703784');">Andrei L.</span></p>
       </div> 
      </div>
    <script>
            var navBar = document.getElementById("navBar");
            function togglebtn(){
            navBar.classList.toggle("hidemenu");}
   </script>      
 </body>
</html>