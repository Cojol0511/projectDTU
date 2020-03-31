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


  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/1fa75c7674.js" crossorigin="anonymous"></script>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/owl.theme.default.min.css">

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
            <li class="item-sub-menu"><a href="#">Rau củ</a></li>
            <li class="item-sub-menu"><a href="#">Trái cây</a></li>
            <li class="item-sub-menu"><a href="#">đồ uống</a></li>
            <li class="item-sub-menu"><a href="#">đồ khô</a></li>
          </ul>
        </li>
        <li class="nav-link"><a href="#">kiến thức</a></li>
        <li class="nav-link"><a href="#">liên hệ</a></li>
      </ul>
    </nav>

    <div class="nav-icon">
      <!-- open nav-icon class-->
      <i class="fas fa-search" id="search"></i>
      <i class="fas fa-user" id="user"></i>
      <i class="fas fa-shopping-cart"></i>
    </div> <!-- finish nav-icon class-->
  </header>
  <!-- ----------------X----------------Navigation---------------X-------------- -->

  <!-- ---------------------------------Form popup------------------------------ -->
  <div class="popup" id="popup">
    <div id="close"><i class="fas fa-times"></i></div>
    <div class="form-popup" id="formLogin">
      <form action=""method="POST" action="{{ route('login') }}">
        <div class="login-regis">
          <h2>Đăng Nhập</h2>
          <a href="#" id="register">Đăng ký</a>
        </div>
        <!-- Email -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

          <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <!-- Email -->

        <!-- Password -->
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-md-4 control-label">Password</label>

          <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <!-- Password -->

        <button type="submit">Đăng Nhập</button>
        <p>Bạn quên mật khẩu?<a href="#">Quên mật khẩu</a></p>
      </form>

    </div>


    <div class="register-popup" id="formRegister">
      <form action="">
        <div class="login-regis">
          <h2>Đăng Ký</h2>
          <a href="#" id="login">Đăng Nhập</a>
        </div>
        <div class="input-group">
          <input type="text" id="email" required>
          <label for="email">Nhập địa chỉ Email</label>
        </div>

        <div class="input-group">
          <input type="password" id="password" required>
          <label for="password">Nhập mật khẩu</label>
          <!-- dieu huong dau nhay cho the input -->
        </div>
        <div class="input-group">
          <input type="text" id="fullName" required>
          <label for="fullName">Nhập Họ Và Tên</label>
          <!-- dieu huong dau nhay cho the input -->
        </div>
        <div class="input-group">
          <input type="text" id="numberPhone" required>
          <label for="numberPhone">Nhập số điện thoại</label>
          <!-- dieu huong dau nhay cho the input -->
        </div>
        <button type="submit">Đăng Ký</button>
      </form>
    </div>


  </div>

  <!-- ----------------X----------------Form popup-----------X------------------ -->

  <!-- ---------------------------------search popup------------------------------ -->

  <div class="popup" id="search-popup">
    <div id="close-search"><i class="fas fa-times"></i></div>
    <div class="search_box">
      <input type="text" placeholder="Bạn muốn tìm kiếm gì?">
      <i class="fas fa-search"></i>
    </div>
  </div>
  <!-- ----------------X----------------search popup-----------X------------------ -->

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


      <button class="prevBtn" onclick="plusSlide(-1)"><i class="fas fa-chevron-left"></i></button>
      <button class="nextBtn" onclick="plusSlide(1)"><i class="fas fa-chevron-right"></i></button>
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
    <div class="promotion-content">
      <div class="container-content">
        <h1 class="main-content">Khuyến Mãi Trong Tuần</h1>
        <p class="sub-content">Cơ hội để gia đình bạn sở hữu những sản phẩm ưu đãi</p>
        <div class="time-promotion">
          <span>0
            <strong>Giờ</strong>
          </span>
          <span>0
            <strong>Phút</strong>
          </span>
          <span>0
            <strong>Giây</strong>
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- ----------------X----------------Promotion---------X-------------------- -->

  <!-- ---------------------------------Product Promotion------------------------------ -->
  <section class="section product-promotion">
    <div class="container">
      <div class="owl-carousel">
        <div class="product-details img-promotion">
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
        <div class="product-details img-promotion">
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
        <div class="product-details img-promotion">
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
        <div class="product-details img-promotion">
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
        <div class="product-details img-promotion">
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
        <div class="product-details img-promotion">
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
        <div class="product-details img-promotion">
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


        <div class="owl-navigation">
          <span class="owl-nav-prev"><i class="fas fa-chevron-left"></i></span>
          <span class="owl-nav-next"><i class="fas fa-chevron-right"></i></span>
        </div>
      </div>
    </div>
  </section>
  <!-- ----------------X----------------Product Promotion-------------X---------------- -->

  <!-- ------------------------------------advertisement--------------------------- -->
  <section class="section advertisement">
    <div class="advertisement-wrap">
      <div class="maketing1">
        <a href="#"><img src="./img/banner29.jpg" alt="banner-29"></a>
      </div>
      <div class="marketing2">
        <a href="#"><img src="./img/banner30.jpg" alt="banner-30"></a>
        <a href="#"></a>
      </div>
      <div class="marketing3">
        <a href="#"><img src="./img/banner31.jpg" alt="banner-31"></a>
        <a href="#"><img src="./img/banner32.jpg" alt="banner-32"></a>
        <a href="#"><img src="./img/banner33.jpg" alt="banner-33"></a>
      </div>
    </div>
  </section>

  <!-- ----------------X----------------advertisement--------------X--------------- -->


  <!-- ---------------------------------supplier------------------------------ -->
  <section class="section supplier">
    <div class="container">
      <div class="owl-carousel">
        <div class="item"><a href="#"><img src="./img/brand1.png" alt="supplier1"></a></div>
        <div class="item"><a href="#"><img src="./img/brand2.png" alt="supplier2"></a></div>
        <div class="item"><a href="#"><img src="./img/brand3.png" alt="supplier3"></a></div>
        <div class="item"><a href="#"><img src="./img/brand5.png" alt="supplier4"></a></div>
        <div class="item"><a href="#"><img src="./img/brand1.png" alt="supplier5"></a></div>
        <div class="item"><a href="#"><img src="./img/brand2.png" alt="supplier6"></a></div>
        <div class="item"><a href="#"><img src="./img/brand3.png" alt="supplier7"></a></div>
      </div>
    </div>
  </section>

  <!-- ----------------X----------------supplier--------------X--------------- -->





















  <!-- owl carousel js -->
  <script src="./js/owl.carousel.min.js"></script>
  <!-- Custom js -->
  <script src="./js/main.js"></script>
</body>

</html>