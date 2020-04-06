 <!-- ---------------------------------Navigation------------------------------ -->
 <header id="navbar" class="flex-row">
    <div class="logo">
      <img src="source/img/logo-new.png" alt="MonaLogo">
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
      <ul>
        <li style="display: inline-block;"><i class="fas fa-search" id="search"></i></li>
        <li style="display: inline-block;"><i class="fas fa-user" id="user"></i></li>
        <li style="display: inline-block;" class="cart">
          <i class="fas fa-shopping-cart" id="cart"></i>
          <div class="beta-dropdown cart-body">
            
<div class="cart-item">
  <div class="media">
    <a class="pull-left" href="#"><img src="./img/product-1-470x470.jpg" alt=""></a>
    <div class="media-body">
      <span class="cart-item-title">Sample Woman Top</span>
      <span class="cart-item-amount">1*<span>$49.50</span></span>
    </div>
    <i class="far fa-times-circle"></i>
  </div>
</div>
            
            
            <div class="cart-caption">
              
            <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">49.50 đ</span></div>
              <div class="clearfix"></div>
              
              <div class="center">
                <div class="space10">&nbsp;</div>
                <a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i
                    class="fa fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div> <!-- finish nav-icon class-->
  </header>
  <!-- ----------------X----------------Navigation---------------X-------------- -->

  <!-- ---------------------------------Form popup------------------------------ -->
  <div class="popup" id="popup">
    @include('login');


    @include('register');


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