

<header id="navbar" class="flex-row">
    <div class="logo">
      <a href="{{URL::to('/trang-chu')}}"><img src="{{('/source/img/logo-new.png')}}" alt="MonaLogo"></a>
    </div>
    <nav>
      <ul class="nav-items">
        <li class="nav-link"><a class="home" href="{{URL::to('/trang-chu')}}">trang chủ</a></li>
        <li class="nav-link"><a href="{{URL::to('/gioi-thieu')}}">giới thiệu</a></li>
        <li class="nav-link">
          <a href="{{URL::to('/cua-hang')}}">cửa hàng</a>
          <ul class="dropdown-menu">
            <li class="item-sub-menu"><a href="#">Rau củ</a></li>
            <li class="item-sub-menu"><a href="#">Trái cây</a></li>
            <li class="item-sub-menu"><a href="#">đồ uống</a></li>
            <li class="item-sub-menu"><a href="#">đồ khô</a></li>
          </ul>
        </li>
        <li class="nav-link"><a href="{{URL::to('/kien-thuc')}}">kiến thức</a></li>
        <li class="nav-link"><a href="#">liên hệ</a></li>
      </ul>
    </nav>

    <div class="nav-icon">
      <!-- open nav-icon class-->
      <ul>
        <li style="display: inline-block;"><i class="fas fa-search" id="search"></i></li>
        <li style="display: inline-block;"><i class="fas fa-user" id="user"></i></li>
        <li style="display: inline-block;" class="lala">

          <i class="fas fa-shopping-cart" id="cart" onclick="shopCart()"></i>
          <div class="cart-body" id="beta-dropdown" style="width:20%;">
            <div id="change-item-cart">
              @if(Session::has("Cart") != null)
              {{-- open cart-item --}}
              <div class="cart-item">
                <table style="width: 100%">
                  @foreach (Session::get('Cart')->products as $item)
                  <tr>
                    <th>
                      <div class="media">
                        <a class="pull-left" href="#"><img
                            src="{{URL::to('/source/img/'.$item['productInfo']->image)}}" alt=""
                            style="display: inline-block"></a>
                        <div class="media-body">
                          <span class="cart-item-title">{{$item['productInfo']->name}}</span>
                          <span
                            class="cart-item-amount">{{$item['qty']}}*<span>{{number_format($item['productInfo']->price)}}
                              đ</span></span>
                        </div>
                        <i class="far fa-times-circle remove" data-id="{{$item['productInfo']->id}}"></i>
                      </div>
                    </th>
                  </tr>
                  @endforeach
                </table>

              </div>
              {{-- close cart-item  --}}
              {{-- open cart-caption --}}
              <div class="cart-caption">
                <div class="cart-total text-right">Tổng tiền: <span
                    class="cart-total-value">{{number_format(Session::get('Cart')->totalPrice)}} đ</span></div>
                <div class="clearfix"></div>
                @endif
              </div>
              {{-- close cart-caption  --}}
              <div class="center">
                <div class="space10">&nbsp;</div>
                <a href="{{URL::to('/thanh-toan')}}" class="beta-btn primary text-center">Đặt hàng <i
                    class="fa fa-chevron-right"></i></a>
              </div>
            </div>

          </div>
        </li>
      </ul>
    </div> <!-- finish nav-icon class-->
  </header>

  <div class="popup" id="popup">
    <div id="close"><i class="fas fa-times"></i></div>


    @include('.page.login')
    @include('.page.register')


  </div>

  <!-- ----------------X----------------Form popup-----------X------------------ -->

  <!-- ---------------------------------search popup------------------------------ -->

  <div class="popup" id="search-popup">
    <div id="close-search"><i class="fas fa-times"></i></div>
    <div class="search_box">
      <form action="{{route('search')}}" method="get">
        <input type="text" name="key" placeholder="Bạn muốn tìm kiếm gì?" onKeyPress="return disableEnterKey(event)">
        <input type="submit">
        <i class="fas fa-search"></i>
      </form>

    </div>
  </div>