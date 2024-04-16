bakery

html file

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bakery</title>
<meta charset="utf-8">
<link rel="stylesheet" href= "assets/css/my-style.css">
</head>

<body>
 
    <div class="header">
        <div class="container">
            <div class="header-line">
                <div class="header-logo">
                <img src="logo.jpg" alt="logo">
                </div>

                <div class="nav-menu">
                    <ul class="menu">
                        <li class="link">Home Page</li>
                        <li class="link">About us</li>
                        <li class="link">Contact us</li>
                    </ul>
                </div>

                

               <div class="phone"> 
                    <div class="holdphone">
                        <div class="phone-img">
                            <img src="phone.png" alt="phone">
                        </div>

                        <div class="number"><a class="numb" href="#">+0672567916</a>
                        </div>
                    </div>


                    <div class="phonetext">
                        Зв'язатись з нами.
                    </div>

                    <div class="button">
                        <a class="butt" href="#">Зробити замовлення</a>
                    </div>

                    <div class="menu-holder">
                    <a href="#">
                        <div class="menutext">Вітаємо у нашій пекарні!</div>
                        <img src="menu1.png" alt="MENU">
                    </a>
                    <div class="undermenu">
                        Найкраща випічка у місті
                    </div>
                </div>

               </div>
            </div>
        </div>
    </div>

    <div class="center">
        <div class="first">
            <div class="menu-image">
                <img src="dish-image.png" alt="dish">
            </div>
            <div class="first-header">
                Найкраща випічка у місті
            </div>
            <div class="first-text">
            Найкраща якість. Тому що зроблено з душею
            </div>
        </div>

        <div class="second">
            <div class="menu-image-second">
                <img src="dish-image.png" alt="dish">
            </div>
            <div class="second-header">
                Недорога випічка
            </div>
            <div class="second-text">
                Ціна нашої випічки залежить тільки від її кількості
            </div>
        </div>

        <div class="third">
            <div class="menu-image-third">
                <img src="dish-image.png" alt="dish">
            </div>
            <div class="third-header">
                Чарівна атмосфера
            </div>
            <div class="third-text">
                У нашому закладі панує магічна атмосфера
                наповнена смачними ароматами
            </div>
        </div>
    </div>

    <div class="dawn">
        <div class="up-video-text">
        Невелике відео про нас
        </div>
        <div class="video">
            <iframe width="560" height="315" 
                src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=D6U8jgwTkNg-mZzk" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
    </div>

    <div class="bottom">
        <div class="bottom-text">Доставка у межах міста безкоштовна. <br> Тож постіши зробити замовлення
        </div>
        <div class="button2">
        <a class="butt" href="#">Зробити замовлення</a>
        </div>

    </div>    

</body>

CSS FILE

body{
    margin: 0;
}

.header{
    background-color: rgb(232, 118, 131);
    height: 100vh;
    }
    
.container{
margin: 0px 0px;
}

.header-line{
    padding-top: 20px;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
  
.link{
font-weight: 600;
font-size: 20px;

}

.numb{
text-decoration: none;
font-weight: 800;
}

.phonetext{
font-weight: 500;

}
.holdphone{
display: flex;
align-items: center;
}

.butt{
background-color: rgb(55, 218, 99);
color: #fff;
text-decoration: none;
padding: 15px 20px;
font-weight: 600;
}

.menu-holder{
position: absolute;
margin-top: 200px;
margin-left: -900px;
}

.menutext{
text-decoration: none;
font-weight: 700;
font-size: 150%;
color: black;
}

.undermenu{
font-weight: 500;
font-size: 130%
}

.butt:hover{
background-color: rgb(41, 69, 12);
transition: color 0,4s linear;
}

.numb:hover{
background-color: burlywood;
transition: color 0,4s linear;
}

.menu-list{
font-weight: 700;

}

.first{
margin-top: -50px;    
background-color: antiquewhite;
margin-left: 120px;    
border: 3px black;
margin-right: 1200px;
padding: 15px 15px;
}

.menu-image{
    text-align: center;
margin-left: 10px;
}

.first-header{
text-align: center;
font-weight: 700;
font-size: 110%;
}

.menu-image-second{
margin-left: 10px;    
}
.second{
    position: absolute;
    margin-top: -195px;
    text-align: center;
    background-color: antiquewhite;
    margin-left: 600px;    
    border: 3px black;
    margin-right: 700px;
    padding: 15px 15px;
}

.second-header{
    text-align: center;
    font-weight: 700;
    font-size: 110%;    
}

.third{
    position: absolute;
    margin-top: -190px;
    text-align: center;
    background-color: antiquewhite;
    margin-left: 1150px;    
    border: 3px black;
    margin-right: 120px;
    padding: 15px 15px;
}
.third-header{
    text-align: center;
    font-weight: 700;
    font-size: 110%; 
}

.up-video-text{
margin-top: 300px;
font-weight: 700;
font-size: 150%; 
margin-left: 100px;   
}

.video{
margin-left: 100px;    
}

.bottom{
background-color: rgb(232, 118, 131);
height: 15vh;
}

.bottom-text{
margin-left: 100pxS;    
margin-top: 200px;  
font-weight: 700;
font-size: 150%;
}

.button2{
margin-left: 1000px;

}

.dawn{
background-color: antiquewhite;    
}



