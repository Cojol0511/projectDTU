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
 
   <!-- Owl Carousel -->'
   <link rel="stylesheet" href="{{asset('/source/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('/source/css/owl.theme.default.min.css')}}">
 
   <!--  Custom style -->
   <link rel="stylesheet" href="{{asset('/source/css/stylessss.css')}}">
   <link rel="stylesheet" href="{{asset('/source/css/introduces.css')}}">
   <link rel="stylesheet" href="{{asset('/source/css/knowledges.css')}}">
   <link rel="stylesheet" href="{{asset('/source/css/checkout.css')}}">
   <link rel="stylesheet" href="{{asset('/source/css/Store.css')}}">
   <link rel="stylesheet" href="{{asset('/source/css/productDetails.css')}}">
 
 
   <!-- Jquery -->
   <script src="{{asset('/source/js/jquery-350.min.js')}}"></script>
 
   <style>
     #beta-dropdown {
       display: none;
     }
 
     .lala:hover #beta-dropdown {
       display: block;
     }
 
     .cart-item {
       padding: 5px 0
     }
 
     .cart-item .media {
       width: 100%;
     }
 
     .section-detail .row .row-1 img {
       width: 90%
     }
 
     .socail_login i {
       width: 20px;
       height: auto;
     }
   </style>
 
 </head>
 
 <body>
 
   <!-- ---------------------------------Navigation------------------------------ -->
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
   <!-- ----------------X----------------Navigation---------------X-------------- -->
 
   <!-- ---------------------------------Form popup------------------------------ -->
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
   <!-- ----------------X----------------search popup-----------X------------------ -->
 
   @yield('page.content')
 
   @yield('knowledge')
   @yield('introduce')
   @yield('checkout')
   @yield('store')
   @yield('productDetail')
 
 
   <!-- Footter -->
 
   <!-- /* --------------------- SECTION-3 -------------------- */ -->
   <section class="section-3">
     <div class="container">
       <div class="text-3">
         <h1>Đăng ký để nhận cập nhật</h1>
         <p>Để lại email để không bỏ lỡ bất kì ưu đãi nào</p>
       </div>
       <div class="text-enter">
         <input class="enter" type="text" placeholder="Email...">
         <button>Đăng Ký</button>
       </div>
     </div>
   </section>
   <!-- /* --------------------- SECTION-4 -------------------- */ -->
   <section class="section footer">
     <div class="row-second">
       <div class="col-1-of-4">
         <a href="#"><img class="logo-footer" src="{{('/source/img/logo-new.png')}}" alt="Logo"></a>
         <div class="icon-footer">
           <ul>
             <li><i class="fas fa-map-marker-alt"></i> 319 C16 Lý Thường Kiệt, Phường 15, Quận 11,<br>Tp.HCM</li>
             <li><i class="fas fa-phone-square-alt"></i><a href="#" style="text-decoration: none;">076 922 0162</a></li>
             <li><i class="fas fa-envelope-open-text"></i><a href="#" style="text-decoration: none;">mon@mona.media</a>
             </li>
             <li><i class="fab fa-skype"></i><a href="#" style="text-decoration: none;">demonhunterp</a></li>
           </ul>
         </div>
       </div>
 
       <div class="col-1-of-4">
         <h3>MENU</h3>
         <div class="link">
           <ul>
             <li class="footer-link"><a href="#" style="text-decoration: none;">Trang Chủ</a></li>
             <li class="footer-link"><a href="#" style="text-decoration: none;">Giới thiệu</a></li>
             <li class="footer-link"><a href="#" style="text-decoration: none;">Cửa hàng</a></li>
             <li class="footer-link"><a href="#" style="text-decoration: none;">Kiến thức</a></li>
             <li class="footer-link"><a href="#" style="text-decoration: none;">Liên hệ</a></li>
           </ul>
         </div>
       </div>
 
       <div class="col-1-of-4">
         <h3>SẢN PHẨM</h3>
         <div class="link">
           <ul>
             <li class="footer-link"><a href="#" style="text-decoration: none;" ;>Rau củ</a></li>
             <li class="footer-link"><a href="#" style="text-decoration: none;" ;>Trái Cây</a></li>
             <li class="footer-link"><a href="#" style="text-decoration: none;" ;>Đồ Uống</a></li>
             <li class="footer-link"><a href="#" style="text-decoration: none;" ;>Đồ Khô</a></li>
           </ul>
         </div>
       </div>
 
       <div class="col-1-of-4">
         <h3>INSTAGRAM</h3>
       </div>
     </div>
   </section>
 
 
 
 
 
 
 
 
 
   <!-- owl carousel js -->
   <script src="{{asset('/source/js/owl.carousel.min.js')}}"></script>
 
 
 
   <!-- JavaScript -->
   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
 
   <!-- CSS -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
   <!-- Default theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
   <!-- Semantic UI theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
   <!-- Bootstrap theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
 
   <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
 
   <!-- Custom js -->
   <script src="{{asset('/source/js/mains.js')}}"></script>
   <script src="{{asset('/source/js/product.js')}}"></script>
 
   <script>
     $('#change-item-cart table tr th .media').on("click", ".remove", function () {
       url = 'Delete-Item-Cart/' + $(this).data('id');
       axios.get(url).then(function (res) {
         renderCart(res);
         alertify.success('Xóa hàng thành công');
       });
     });
 
     function AddCart(id) {
       url = 'Add-Cart/' + id;
       axios.get(url).then(function (res) {
         renderCart(res);
         alertify.success('Đặt hàng thành công');
       })
     }
 
     function renderCart(response) {
       $("#change-item-cart").empty();
       $("#change-item-cart").html(response.data);
     }
 
 
        $("form input").keypress(function (e) {
            if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
                $('input[type=submit]').click();
                return false;
            } else {
                return true;
            }
        });
   </script>
 
 </body>
 
 </html>