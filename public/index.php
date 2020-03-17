<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);

?>

<!-- 
    Author Name     : Doan Kim Tuan
    Author Email    : Doantuan21101999@hmail.com 
 -->


 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mona</title>

  <!-- Boostrap CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->

  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/1fa75c7674.js" crossorigin="anonymous"></script>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  <!-- Grid Style -->
  <link rel="stylesheet" href="./css/grid.css">

  <!--  Custom style -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Jquery -->
  <script src="./js/jquery-341.min.js"></script>
</head>

<body>

  <!-- ---------------------------------Navigation------------------------------ -->
  <header id="navbar" class="flex-row">
    <div class="logo">
      <img src="./img/logo-new.png" alt="MonaLogo">
    </div>
    <nav>
      <ul class="nav-items">
        <li class="nav-link"><a class="home" href="#">trang chủ</a></li>
        <li class="nav-link"><a href="#">giới thiệu</a></li>
        <li class="nav-link">
          <a href="#">cửa hàng</a>
          <ul class="dropdown-menu">
            <li class="item-sub-menu"><a href="#">đồ uống</a></li>
            <li class="item-sub-menu"><a href="#">đồ uống</a></li>
            <li class="item-sub-menu"><a href="#">đồ uống</a></li>
            <li class="item-sub-menu"><a href="#">đồ uống</a></li>
          </ul>
        </li>
        <li class="nav-link"><a href="#">kiến thức</a></li>
        <li class="nav-link"><a href="#">liên hệ</a></li>
      </ul>
    </nav>

    <div class="nav-icon">
      <!-- open nav-icon class-->
      <i class="fas fa-search"></i>
      <i class="fas fa-user"></i>
      <i class="fas fa-shopping-cart"></i>
    </div> <!-- finish nav-icon class-->
  </header>
  <!-- ----------------X----------------Navigation---------------X-------------- -->

  <!-- ---------------------------------Slide------------------------------ -->
  <section class="section">
    <div class="carousel-container">
      <!-- 1468*650 -->
      <div class="carousel-slide fade">
        <div class="roư">

          <div class="carousel-content">
            <h4 class="green">Content</h4>
            <h2>100% tự nhiên</h2>
            <p>Giảm giá khi đặt mua ngay hôm nay</p>
            <a href="#" class="btn">mua ngay</a>
          </div>

          <div class="carousel-img">
            <img src="./img/imgslide13-300x274.png" alt="slide1">
          </div>
        </div>
        <img src="./img/slider26.jpg" alt="SLide background 1">
      </div>

      <div class="carousel-slide fade">
        <div class="roư">
          <div class="carousel-content">
            <h4 class="green">Content</h4>
            <h2>100% tự nhiên</h2>
            <p>Giảm giá khi đặt mua ngay hôm nay</p>
            <a href="#" class="btn">mua ngay</a>
          </div>
          <div class="carousel-img">
            <img src="./img//imgslide13-300x274.png" alt="slide1">
          </div>
        </div>
        <img src="./img/slider28.jpg" alt="SLide background 2">
      </div>


      <button class="prevBtn" onclick="plusSlide(-1)">&#10094;</button>
      <button class="nextBtn" onclick="plusSlide(1)">&#10095;</button>
    </div>
  </section>

  <!-- ----------------X----------------slide--------------------X--------- -->

  <!-- ---------------------------------Banner------------------------------ -->
  <section class="section">
    <div class="banner">
      <div class="wrapper">
        <div class="banner-img">
          <div>
            <a href="#"><img src="./img/banner36.jpg" alt="banner-1"></a>
          </div>
        </div>
        <div class="banner-img">
          <div>
            <a href="#"><img src="./img/banner35.jpg" alt="banner-2"></a>
          </div>
        </div>
        <div class="banner-img">
          <div>
            <a href="#"><img src="./img/banner34.jpg" alt="banner-3"></a>
          </div>
        </div>
        <div class="banner-img">
          <div>
            <a href="#"><img src="./img/banner28.jpg" alt="banner-4"></a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ---------------X----------------Banner--------------------X--------- -->

  <!-- ---------------------------------Featured products------------------------------ -->
  <section class="section featured-products">
    <div class="products-content">
      <h1 class="text-center">Sản phẩm nổi bật</h1>
      <div class="table-content">
        <ul class="nav-content">
          <li><a href="#tab-new" id="new">mới nhất</a></li>
          <li><a href="#tab-discount" id="discount">giảm giá</a></li>
          <li><a href="#tab-selling" id="selling">bán chạy</a></li>
        </ul>

        <div class="product" id="tab-new">
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name">
              <a href="#">Chanh leo</a>
            </div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
        </div>

        <div class="product" id="tab-discount">
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-12-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name">
              <a href="#">Chanh leo</a>
            </div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
        </div>

        <div class="product" id="tab-selling">
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-21-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name">
              <a href="#">Chanh leo</a>
            </div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
          <div class="product-details">
            <div class="product-img">
              <div>
                <a href="#"><img src="./img/product-16-470x470.jpg" alt="new product 1"></a>
              </div>
            </div>
            <div class="product-name"><a href="#">Chanh leo</a></div>
            <div class="product-prices">
              <span>190,000</span>
              <span>đ</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- ----------------X----------------Featured products---------X-------------------- -->
 
  <!-- ---------------------------------Promotion------------------------------ -->

  <section class="section promotion">

  </section>
  <!-- ----------------X----------------Promotion---------X-------------------- -->



  <!-- Custom js -->
  <script src="./js/main.js"></script>
</body>

</html>
