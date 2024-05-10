<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'web_projek');

// Buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS, DB1);
$queryprov = " 
SELECT provinsi FROM search
 ORDER BY provinsi ASC
 ";
$resultprov = $db1->query($queryprov);

$querysearch = " 
SELECT * FROM search
 ";
$resultsearch = $db1->query($querysearch);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marine Treasure</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
</head>
<body>


<!-- HEADER -->

<header id="home">
    <img class="logo" src="#" alt="logo">
    <nav class="navbar">
        <ul class="nav-link">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#popular">Popular</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#gallery">Gallery</a></li>
        </ul>
    </nav>
    <a class="sign-in" href="signup.php"><button>Sign In</button></a>
</header>



<!-- HOME/HERO -->



<section id="home">
    <main>
        <div class="hero">
            <video autoplay loop muted plays-inline class="background-clip">
                <source src="https://videos.pexels.com/video-files/3115738/3115738-uhd_3840_2160_24fps.mp4" type="video/mp4">
            </video>

            <div class="content">
                <h1>Journey to Explore World</h1>
                <p>Let's explore the world to learn more and focus all about marine together here.</p>
                <div class="search-bar">
                    <div class="dropdown">
                        <div id="drop-text" class="dropdown-text">
                            <span id="span">Category</span>
                            <i id="icon" class="fa-solid fa-chevron-down"></i>
                        </div>
                        <ul id="list" class="dropdown-list">
                            <?php
                                foreach ($resultprov as $row)
                                {
                                    echo '<li class="dropdown-list-item">"'.$row['provinsi'].'"</li>';
                                }
                                ?>
                        </ul>
                    </div>
                    <form method="GET" action="index.php">
                    <div class="search-box">
                        <input type="text" id="searchinput" name="searchinput" placeholder="Search Anything..." value=""/>
                        <button type="submit" class="fa-solid fa-magnifying-glass"></button>
                    </div>

                    </form>
                </div>
        </div>
    </main>
<section class="popular-destination" id="popular">
    <div class="card-container" >
        <?php
        $querycari = "SELECT * FROM search";
        if (isset($_GET['searchinput'])){
            $pencarian = $_GET['searchinput'];
            $querycari = "SELECT * FROM search WHERE provinsi LIKE '%".$pencarian."%'";
        }
        $data = mysqli_query($db1,$querycari);
        while($row = mysqli_fetch_array($data)){
            ?>
                <div class="card">
                        <img src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="gambar">
                        <div class="card-content" id="showdata">
                            <h3><?php echo $row['title'];?></h3>
                        <p><?php echo $row['description'];?></p>
                        <p><?php echo $row['provinsi'];?></p>
                        </div>
                    </div>
        <?php } ?>
</section>




<!-- ABOUT -->
<section class="about" id="about">
    <div class="main">
        <img src="img/sample.jpg">
        <div class="about-text">
            <h1>About Us</h1>
            <h5> <span>Marine Treasure</span></h5>
            <p>Marine Treasures This website was created starting March 18 2024. This website was created because of a large project submitted by...
                Marine Treasures This website was created with a theme related to 'marine'. Why did we choose a theme with a 'marine' theme because...
                With our website, you can find out, study and broaden your knowledge about maritime affairs at large. </p>
            <button class="btn-about">Let's Talk</button>
        </div>
    </div>
</section>




<!-- POPULAR-->
<!--<section class="popular-destination" id="popular">-->
<!---->
<!--    <h1>Popular Destination</h1>-->
<!--    <p>Explore all these type of destinations to learn more.</p>-->
<!--    <p>The more you learn, the more you know.</p>-->
<!---->
<!--    <div class="card-container">-->
<!--        <div class="card">-->
<!---->
<!--            <img src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="gambar">-->
<!--            <div class="card-content">-->
<!--                <h3>Banda Neira</h3>-->
<!--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quisquam.</p>-->
<!--                <a href="" class="btn">Read More</a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="card-container">-->
<!--            <div class="card">-->
<!--                <img src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="gambar">-->
<!--                <div class="card-content">-->
<!--                    <h3>Raja Ampat</h3>-->
<!--                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quisquam.</p>-->
<!--                    <a href="" class="btn">Read More</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card-container">-->
<!--                <div class="card">-->
<!--                    <img src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="gambar">-->
<!--                    <div class="card-content">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--</section>-->


<!-- GALLERY -->



<section class="card-gallery" id="gallery">

    <h1>Image Gallery</h1>
    <p>To know more about us, let's keep in touch.</p>

    <div class="image-container">
        <div class="image"><img src="https://images.unsplash.com/photo-1494256997604-768d1f608cac?q=80&w=1858&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
        <div class="image"><img src="https://images.unsplash.com/photo-1494256997604-768d1f608cac?q=80&w=1858&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
        <div class="image"><img src="https://images.unsplash.com/photo-1494256997604-768d1f608cac?q=80&w=1858&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
        <div class="image"><img src="https://images.unsplash.com/photo-1494256997604-768d1f608cac?q=80&w=1858&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
        <div class="image"><img src="https://images.unsplash.com/photo-1494256997604-768d1f608cac?q=80&w=1858&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
        <div class="image"><img src="https://images.unsplash.com/photo-1494256997604-768d1f608cac?q=80&w=1858&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></div>
    </div>


    <!-- FOOTER -->



    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        <div class="footerNav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#popular">Popular</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </ul>
        </div>

        <div class="footerButton">
            <p>Copyright &copy;2024; Designed by <span class="designer">Kelompok 8 X-PPLG</span></p>
        </div>
    </footer>

    <script>
        $(document).ready(function(){
            $('#searchinput').on("keyup", function(){
                var searchinput = $(this).val();
                $.ajax({
                    method:'POST',
                    url:'searchajax.php',
                    data:{name:searchinput},
                    success:function(response)
                    {
                        $("#showdata").html(response);
                    }
                });
            });
        });
    </script>
    <!-- JS SCRIPT-->
    <script src="script.js"></script>
</body>
</html>
