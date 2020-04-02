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
    <div id="close"><i class="fas fa-times"></i></div>
    <div class="form-popup" id="formLogin">
      <form action="">
        <div class="login-regis">
          <h2>Đăng Nhập</h2>
          <a href="#" id="register">Đăng ký</a>
        </div>
        <div class="input-group">
          <input type="email" id="email" class="form-control" name="email" required
            autofocus>
          <label for="username">Nhập địa chỉ Email</label>
        </div>

        <div class="input-group">
          <input type="password" id="password" required>
          <label for="password">Nhập mật khẩu</label>
          <!-- dieu huong dau nhay cho the input -->
        </div>
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