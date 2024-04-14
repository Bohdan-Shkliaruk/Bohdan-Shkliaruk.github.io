<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Site</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/css/my-style.css">
</head>
<body>
<!-- ******HEADER****** -->
<header id="header" class="header">
    <div class="container">

        <p class= "story">Story</p>
        <div class= "top-bar">
            <div class= "block">
                <p class= "marcy">Marcy..</p>
            </div>
        </div>

        
        <div class="nav-menu">
            <div id="burger">
                <span></span><span></span><span></span>
            </div>
                <ul class="menu">
                <li><a href="/">Home Page</a></li>
                <li><a href="/about.php">About Us</a></li>
                <li><a href="/login.php">Log in</a></li>
                </ul>
        </div>
        

    </div>
</header>

<main class="main content">

<div class="row custom_new">
    <div class="div-text">
        <h3 class="title">What is Lorem Ipsum?</h3>
            <p class="text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer
                took a galley of type and scrambled it to make a type specimen book. It has
                survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially
                unchanged.
            </p>
                <p class="text">
                    It was popularised in the 1960s with the release of Letraset sheets containing
                    Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including
                     versions of Lorem Ipsum
                </p>

    <p class="link">
        <a href=”article.php”>Full Story</a>
    </p>
</div>
<div class="image-block">

    <img src="games/phot/dot.jpg" alt="Right Image" class="image">
</div>

    <div class="img-absolute">
        <img src="games/phot/dota.jpg" alt="Image on Top" class="imgabove">
    </div>
</div>
 
<div class="row">
    <div class="div-quotation div-text">
        <h3 class="title">We travel not to escape from our life but we travel our life not toescape fromus.... </h3>
            <div class="image-block">
                <img src="assets/img/mountain-view.jpg" alt="Centre Image" class="image">
            </div>
                <p class="text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five
                    centuries, but also the leap into electronic typesetting, remaining essentiallyunchanged.
                </p>
                <p class="text">
                It was popularised in the 1960s with the release of Letraset sheets containing
                Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.
                </p>
                <p class="link">
                    <a href="article.php" class="full-story">Full Story</a>
                </p>
    </div>
 </div>

 <div class="row iframe">
    <iframe width="100%" height="480"
        src=https://www.youtube.com/watch?v=dQw4w9WgXcQautoplay=0&color=white frameborder="0" allowfullscreen></iframe>
</div>

</main>

<!-- ******FOOTER****** -->
<footer class="footer">
    <div class="container text-center">
        <small class="copyright"><?= 'Designed by Me!' ?></small>
    </div><!--//container-->
</footer><!--//footer-->

<!-- Javascript -->
</body>
</html>
