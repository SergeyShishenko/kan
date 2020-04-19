<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ваша мебель</title>
    <link href="./dist/css/bootstrap.css" rel="stylesheet">
    <link href="./dist/css/grid.css" rel="stylesheet">
    <link href="./dist/css/navbar.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- <link rel="stylesheet" href="./dist/slider/css/reset.css" type="text/css" charset="utf-8" /> -->
    <link rel="stylesheet" href="./dist/slider/css/style.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="./dist/slider/css/fractionslider.css">
    <link rel="stylesheet" href="./dist/css/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./dist/css/carousel.css" type="text/css" media="screen" />


    <style>
   body{
  background: url(./dist/images/bg_pattern_grey_middle4_3.png);
  padding-top: 0;
}

    </style>
    <style>
        .thumb img {           
    filter: grayscale(1);
    -webkit-filter: grayscale(1);
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    -o-filter: grayscale(100%);

            border-radius: 5px;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 5px;
      
        }

        .thumb img:hover {
            -webkit-filter: grayscale(0);
            filter: none;
            transition: 0.5s ease-in-out;
            
        }

       .thumb {
             padding: 5px;
        }
    </style>
</head>

<body>

    <div class="container header ">
        <!-- <div class="row"> -->
        <div class="col-md-3 topmenu">
            <a href="http://reform-city.ru/">
                <img src="dist/images/kan-cub.png" alt="" title="" style="width: 158px; height: 82px;"          />
            </a>
        </div>
        <div class="col-md-4 topmenu">        
            <form class="navbar-form navbar-left" role="search">
                <div class="row">
                    <div class=" row " style="margin-left: 0;">
                        <input type="text" class="form-control inner" placeholder="Search">
                        <!-- <div class="input-group-btn"></div> -->
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-md-5 topmenu">

            <div class="contacts">
                <div class="address">ул. Малая почтовая, д. 2/2, стр. 1</div>

                <div class="phones">
                    <div class="phone">+7 (495) 943-63-15</div>
                    <div class="phone">+7 (901) 593-63-15</div>
                </div>
            </div>

            <div class="links">
                <a class="link contacts-form-modal-show" href="#">Обратный звонок</a>
                <a class="link" href="#">Заказать замер</a>
                <a class="link email" href="mailto:mebel@reform-city.ru">mebel@reform-city.ru</a>
                <br />
            </div>

        </div>
        <!-- </div> -->

    </div>

    <div class="container">


        <!-- Static navbar -->
        <div class="navbar navbar-default  " role="navigation" id="fixmenu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">Логотип</a> -->
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Каталог</a>
                    </li>
                    <li>
                        <a href="#">О нас</a>
                    </li>
                    <li>
                        <a href="#">Клиентам</a>
                    </li>
                    <li>
                        <a href="#">Акции и скидки</a>
                    </li>
                    <li>
                        <a href="#">Сотрудничество</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="file:///D:/Dropbox/web/Анимация%20элементов%20списка/list_animation_jquery/index.html">Открыть с диска</a>
                            </li>
                            <li>
                                <a href="C:\\Windows\\notepad.exe">notepad.exe</a>
                            </li>

                            <li>
                                <a href="#">Another action</a>
                            </li>
                            <li>
                                <a href=="javascript:void(0);" onclick="openExplorer('C:\\usr\\');return false">Открыть "C:\" в проводнике</a>
                            </li>
                            <li>
                                <a href="file:///C:/">Папка Только в IE</a>
                            </li>
                            <li>
                                <a href="file:///D:/Dropbox/web/">Открыть в IE</a>
                            </li>
                            <li>
                                <input type="button" value="solid" onclick="openExplorer('D:\\Dropbox\\МОИ ПРОЕКТЫ\\2317 Самаркина (Долина Сетунь)\\ДП 2317 4-14 СанУзел основной (Ванная) NEW\\ДП 2317 4-14 Сан.Узел основной (Ванная).SLDASM')"
                                    class="btn  btn-primary">
                            </li>
                            <li>
                                <input type="button" value="notepad" onclick="run('C:\\Windows\\notepad.exe')" class="btn  btn-primary">
                            </li>
                            <!-- <li><input type="button" value="ACAD" onclick="openExplorer('C:\\Program Files\\Autodesk\\AutoCAD 2014\\acad.exe')"class="btn  btn-primary"></li> -->
                            <li>
                                <span class="glyphicon glyphicon-search"></span>
                                <a href=="javascript:;" onclick="openExplorer('D:\\Dropbox\\МОИ ПРОЕКТЫ\\2317 Самаркина (Долина Сетунь)\\NEW 25-12-2017_09-46-26\\ЖК Долина Сетунь 20 12 17.dwg')"
                                    class="icon file" draggable="true">DWG</a>
                            </li>

                            <!-- <li><input type="button" value="solid" onclick="run('calc.exe')"class="btn  btn-primary"></li> -->
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li>
                                <a href="#">Separated link</a>
                            </li>
                            <li>
                                <a href="#">One more separated link</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="./">Контакты</a>
                    </li>
                    <!-- <li>
                        <a href="#">Static top</a>
                    </li>
                    <li>
                        <a href="#">Fixed top</a>
                    </li> 
                </ul>-->
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <div class="container">

        <div class="slider-wrapper ">
            <div class="responisve-container">
                <div class="slider">
                    <div class="fs_loader"></div>
                    <div class="slide">
                        <!-- <img src="images/01_box_top.png" width="361" height="354" data-position="-152,142" data-in="left" data-delay="200" data-out="right"> -->
                        <!-- <img src="dist/slider/images/01_box_top.png" width="361" height="424" data-position="-152,142" data-in="left" data-delay="200" data-out="right"> -->
                        <img src="dist/slider/sliderimages/slide_01.jpg" width="1150" height="424" data-position="0,-80" data-in="left" data-delay="200"  data-out="right">

                        <!-- <img src="dist/slider/images/01_box_bottom.png" width="422" height="454" data-position="138,-152" data-in="bottomRight" data-delay="200"> -->

                        <!-- <img src="dist/slider/images/01_waves.png" width="1449" height="115" data-position="240,17" data-in="left" data-delay="" data-out="left"> -->

                        <p class="claim light-green" data-position="30,30" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">jQuery Фракционный слайдер</p>
                        <p class="teaser orange" data-position="90,30" data-in="left" data-step="2" data-delay="500">анимация нескольких элементов</p>
                        <p class="teaser green" data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="3000">полный контроль над элементами</p>
                        <p class="teaser turky" data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="5500" data-out="none">открытый код и бесплатно</p>
                        <!-- <img src="dist/slider/images/01_outofthebox.png" data-position="20,330" data-in="bottomLeft" data-delay="500" data-out="fade"> -->
                    </div>

                    <div class="slide">
                        <!-- <img src="dist/slider/images/02_big_boxes.png" data-position="25,445" data-in="fade" data-delay="0" data-out="right"> -->
                        <img src="dist/slider/sliderimages/slide_02.jpg" width="1150" height="424" data-position="0,-80" data-in="left" data-delay="200"
                            data-out="right">

                        <!-- <img src="dist/slider/images/02_small_boxes.png" data-position="80,220" data-in="fade" data-delay="500" data-out="bottomRight"> -->

                        <!-- <img src="dist/slider/images/01_box_bottom.png" data-position="138,-152" data-in="bottomRight" data-delay="200" data-out="bottomRight"> -->

                        <p class="claim light-green " data-position="30,30" data-in="top" data-step="1" data-out="top">Что ожидать?</p>

                        <p class="teaser turky " data-position="90,30" data-in="bottom" data-step="2" data-delay="500">unlimited elements</p>
                        <p class="teaser turky " data-position="120,30" data-in="bottom" data-step="2" data-delay="1500">много переходов</p>
                        <p class="teaser turky " data-position="150,30" data-in="bottom" data-step="2" data-delay="2500">unlimited slides</p>
                        <p class="teaser turky " data-position="180,30" data-in="bottom" data-step="2" data-delay="3500">фоновая анимация</p>
                        <p class="teaser turky " data-position="210,30" data-in="bottom" data-step="2" data-delay="4500">простой в использовании</p>

                        <!-- <img src="dist/slider/images/01_waves.png" width="1449" height="115" data-position="240,200" data-in="right" data-step="2" data-easeIn="easeOutCirc"> -->
                            

                        <!-- <img src="dist/slider/images/02_main.png" data-position="105,180" data-in="fade" data-delay="500" data-out="bottomRight"> -->
                    </div>
                    <div class="slide">
                        <!-- <img src="dist/slider/images/02_big_boxes.png" data-position="25,445" data-in="fade" data-delay="0" data-out="right"> -->
                        <img src="dist/slider/sliderimages/slide_03.jpg" width="1150" height="424" data-position="0,-80" data-in="left" data-delay="200"
                            data-out="right">

                        <!-- <img src="dist/slider/images/02_small_boxes.png" data-position="80,220" data-in="fade" data-delay="500" data-out="bottomRight"> -->

                        <!-- <img src="dist/slider/images/01_box_bottom.png" data-position="138,-152" data-in="bottomRight" data-delay="200" data-out="bottomRight"> -->

                        
                        <p class="claim light-green" data-position="30,30" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">jQuery Фракционный слайдер</p>
                        <p class="teaser orange" data-position="90,30" data-in="left" data-step="2" data-delay="500">анимация нескольких элементов</p>
                        <p class="teaser green" data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="3000">полный контроль над элементами</p>
                        <p class="teaser turky" data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="5500" data-out="none">открытый код и бесплатно</p>

                        <!-- <img src="dist/slider/images/01_waves.png" width="1449" height="115" data-position="240,200" data-in="right" data-step="2" data-easeIn="easeOutCirc"> -->
                            

                        <!-- <img src="dist/slider/images/02_main.png" data-position="105,180" data-in="fade" data-delay="500" data-out="bottomRight"> -->
                    </div>
                    <div class="slide">
                        <!-- <img src="dist/slider/images/02_big_boxes.png" data-position="25,445" data-in="fade" data-delay="0" data-out="right"> -->
                        <img src="dist/slider/sliderimages/slide_04.jpg" width="1150" height="424" data-position="0,-80" data-in="left" data-delay="200"
                            data-out="right">

                        <!-- <img src="dist/slider/images/02_small_boxes.png" data-position="80,220" data-in="fade" data-delay="500" data-out="bottomRight"> -->

                        <!-- <img src="dist/slider/images/01_box_bottom.png" data-position="138,-152" data-in="bottomRight" data-delay="200" data-out="bottomRight"> -->

                        <p class="claim light-green small" data-position="30,30" data-in="top" data-step="1" data-out="top">Что ожидать?</p>

                        <p class="teaser turky " data-position="90,30" data-in="bottom" data-step="2" data-delay="500">unlimited elements</p>
                        <p class="teaser turky" data-position="120,30" data-in="bottom" data-step="2" data-delay="1500">много переходов</p>
                        <p class="teaser turky " data-position="150,30" data-in="bottom" data-step="2" data-delay="2500">unlimited slides</p>
                        <p class="teaser turky " data-position="180,30" data-in="bottom" data-step="2" data-delay="3500">фоновая анимация</p>
                        <p class="teaser turky " data-position="210,30" data-in="bottom" data-step="2" data-delay="4500">простой в использовании</p>
                        <!-- <p class="teaser turky small" data-position="210,30" data-in="bottom" data-step="2" data-delay="4500">простой в использовании</p> -->

                        <!-- <img src="dist/slider/images/01_waves.png" width="1449" height="115" data-position="240,200" data-in="right" data-step="2" data-easeIn="easeOutCirc"> -->
                            

                        <!-- <img src="dist/slider/images/02_main.png" data-position="105,180" data-in="fade" data-delay="500" data-out="bottomRight"> -->
                    </div>
                </div>
            </div>
        </div>


    </div>


    <div class="container">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Navbar example</h1>
            <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It
                includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
            <p>
                <a class="btn btn-lg btn-primary" href="#" role="button">View navbar docs &raquo;</a>
            </p>
        </div>


    <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
    </div>


    </div>
    <!-- /container -->


    <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Галерея</h1>
        </div>

<?php for($i=1;$i<=18;$i++){?>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 thumb">  
                <a data-fancybox="gallery" href="./examples/images/for-image-gallery/img_<?php echo $i;?>.jpg">
                <img src="./examples/images/for-image-gallery/img_<?php echo $i;?>.jpg" class="img-responsive" alt="">
            </a>
            </div>
<?php }?>        
    
        </div>
    </div>


<!--CAROUSEL-->
    <div class="container">
        <div id="main_area">
            <!-- Slider -->
            <div class="row">
                <div class="col-sm-3" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">
                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-0">
                                <img src="http://placehold.it/150x150&text=zero">
                            </a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                        </li>
                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                        </li>
                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                        </li>
                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                        </li>

                        <li class="col-sm-12">
                            <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-12" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                            <img src="http://placehold.it/470x480&text=zero"></div>

                                        <div class="item" data-slide-number="1">
                                            <img src="http://placehold.it/470x480&text=1"></div>

                                        <div class="item" data-slide-number="2">
                                            <img src="http://placehold.it/470x480&text=2"></div>

                                        <div class="item" data-slide-number="3">
                                            <img src="http://placehold.it/470x480&text=3"></div>

                                        <div class="item" data-slide-number="4">
                                            <img src="http://placehold.it/470x480&text=4"></div>

                                        <div class="item" data-slide-number="5">
                                            <img src="http://placehold.it/470x480&text=5"></div>
                                        
                                        <div class="item" data-slide-number="6">
                                            <img src="http://placehold.it/470x480&text=6"></div>
                                        
                                        <div class="item" data-slide-number="7">
                                            <img src="http://placehold.it/470x480&text=7"></div>
                                        
                                        <div class="item" data-slide-number="8">
                                            <img src="http://placehold.it/470x480&text=8"></div>
                                        
                                        <div class="item" data-slide-number="9">
                                            <img src="http://placehold.it/470x480&text=9"></div>
                                        
                                        <div class="item" data-slide-number="10">
                                            <img src="http://placehold.it/470x480&text=10"></div>
                                        
                                        <div class="item" data-slide-number="11">
                                            <img src="http://placehold.it/470x480&text=11"></div>
                                        
                                        <div class="item" data-slide-number="12">
                                            <img src="http://placehold.it/470x480&text=12"></div>

                                        <div class="item" data-slide-number="13">
                                            <img src="http://placehold.it/470x480&text=13"></div>

                                        <div class="item" data-slide-number="14">
                                            <img src="http://placehold.it/470x480&text=14"></div>

                                        <div class="item" data-slide-number="15">
                                            <img src="http://placehold.it/470x480&text=15"></div>
                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Slider-->
            </div>

        </div>
    </div>

<!--/CAROUSEL-->






    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./dist/slider/js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
    <script src="./dist/slider/js/main.js" type="text/javascript" charset="utf-8"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="./dist/js/jquery.fancybox.js"></script>
   

    <!-- <script>
          window.onscroll = function() {myFunction()};
          
          var navbar = document.getElementById("navbar");
          var sticky = navbar.offsetTop;
          
          function myFunction() {
            if (window.pageYOffset >= sticky) {
            //   navbar.classList.add("container");
              navbar.classList.add("sticky");
            } else {
            //   navbar.classList.remove("container");
              navbar.classList.remove("sticky");
            }
          }
          </script> -->

    <script>
        (function () { // анонимная функция (function(){ })(), чтобы переменные "a" и "b" не стали глобальными
            var a = document.querySelector('#fixmenu'),
                b = null; // селектор блока, который нужно закрепить
            window.addEventListener('scroll', Ascroll, false);
            document.body.addEventListener('scroll', Ascroll, false); // если у html и body высота равна 100%
            function Ascroll() {
                if (b == null) { // добавить потомка-обёртку, чтобы убрать зависимость с соседями
                    var Sa = getComputedStyle(a, ''),
                        s = '';
                    for (var i = 0; i < Sa.length; i++) { // перечислить стили CSS, которые нужно скопировать с родителя
                        if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf(
                                'border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 ||
                            Sa[i].indexOf('background') == 0) {
                            s += Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
                        }
                    }
                    b = document.createElement('div'); // создать потомка
                    b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
                    a.insertBefore(b, a.firstChild); // поместить потомка в цепляющийся блок первым
                    var l = a.childNodes.length;
                    for (var i = 1; i < l; i++) { // переместить во вновь созданного потомка всех остальных потомков (итого: создан потомок-обёртка, внутри которого по прежнему работают скрипты)
                        b.appendChild(a.childNodes[1]);
                    }
                    a.style.height = b.getBoundingClientRect().height + 'px'; // если под скользящим элементом есть другие блоки, можно своё значение
                    a.style.padding = '0';
                    a.style.border = '0'; // если элементу присвоен padding или border
                }
                if (a.getBoundingClientRect().top <= 0) { // elem.getBoundingClientRect() возвращает в px координаты элемента относительно верхнего левого угла области просмотра окна браузера
                    b.className = 'sticky';
                } else {
                    b.className = '';
                }
                window.addEventListener('resize', function () {
                    a.children[0].style.width = getComputedStyle(a, '').width
                }, false); // если изменить размер окна браузера, измениться ширина элемента
            }
        })()
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
                $(".fancybox").fancybox();

                $('#myCarousel').carousel({
                    interval: 5000
            });
    
            //Handles the carousel thumbnails
            $('[id^=carousel-selector-]').click(function () {
            var id_selector = $(this).attr("id");
            try {
                var id = /-(\d+)$/.exec(id_selector)[1];
                console.log(id_selector, id);
                jQuery('#myCarousel').carousel(parseInt(id));
            } catch (e) {
                console.log('Regex failed!', e);
            }
            });
            // When the carousel slides, auto update the text
            $('#myCarousel').on('slid.bs.carousel', function (e) {
                    var id = $('.item.active').data('slide-number');
                    $('#carousel-text').html($('#slide-content-'+id).html());
            });
        });
    </script>

</body>

</html>