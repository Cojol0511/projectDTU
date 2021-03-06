@extends('home')
@section('knowledge')
    
<section class="knowledge">
    <div class="title">
      <h1>Kiến Thức</h1>
    </div>
    <div class="wrapper">
      <div class="menu-left">
        <input type="search" id="search" placeholder="Search..." />
        <button class="icon"><i class="fa fa-search"></i></button>
        <div class="table">
          <table>
            <tr>
              <th> Bài Viết Mới</th>
            </tr>
          </table>
        </div>
        <div class="product">
        <table>
          <tr>
            <th><a href="#">Nấm vân chi có dụng gì?</a></th>
          </tr>
        </table>
      </div>
      <div class="product">
        <table>
          <tr>
            <th><a href="#">Chả cốm ăn gì với ngon</a></th>
          </tr>
        </table>
      </div>
    <div class="product">
      <table>
        <tr>
          <th><a href="#">Cách làm măng tây xào tỏi</a></th>
        </tr>
      </table>
    </div>
  <div class="product">
    <table>
      <tr>
        <th><a href="#">Súp lơ nấu món gì ngon?</a></th>
      </tr>
    </table>
  </div>
      </div>
      <div class="list-news">
        <div class="item-new">
              <div>
                <a href="#"><img class="img-news"
                    src="{{('/source/img/menu-products3.jpg')}}" alt="news">
                </a>
              </div>
            <div class="title-new">
              <a href="#"> Cốm tươi làm món gì ngon </a>
            </div>
            <div class="abridged-content">
              Dùng cốm tươi làm món gì, cốm tươi có thể chế biến thành nhiều món ăn khác nhau như chả cốm, chè cốm, xôi cốm, bánh cốm, kem cốm… Với mỗi món ăn, hạt cốm lại cho một hương vị độc đáo riêng. 
                Tùy vào tay nghề người làm, hạt cốm cũng cho những vị khác nhau... 
            </div>
        </div>
        <div class="item-new">

            <div>
              <a href="#"><img class="img-news" src="{{('/source/img/59406586_277022679721039_6026262764271054419_n.jpg')}}"
                  alt="news"></a>
            </div>
            <div class="title-new">
              <a href="#">Nấm vân chi có tác dụng gì? </a>
            </div>
            <div class="abridged-content">
              Cách đây hơn 2000 năm, nấm vân chi rừng đã được biết đến và sử dụng tại Trung Quốc. Giờ đây, khi khoa học phát triển 
              thì công dụng của nấm vân chi rừng ngày càng được khẳng định và nhiều người biết tới...
            </div>

        </div>
        <div class="item-new">

            <div>
              <a href="#"><img class="img-news" 
                src="{{('/source/img/59204060_1515395398594811_7413836574650687457_n.jpg')}}"alt="news"></a>
            </div>
            <div class="title-new">
              <a href="#">Chả cốm ăn với gì ngon </a>
            </div>
            <div class="abridged-content">
              Bánh giò là một loại bánh được làm từ bột gạo tẻ, nhân bánh làm từ thịt nạc heo cùng mộc nhĩ.
               Loại bánh này rất phổ biến tại các tỉnh miền Bắc...
            </div>

        </div>
        <div class="item-new">

            <div>
              <a href="#"><img class="img-news" 
                src="{{('/source/img/banner-menu-post2.jpg')}}"alt="news"></a>
            </div>
            <div class="title-new">
              <a href="#">Cách làm măng tây xào tỏi </a>
            </div>
            <div class="abridged-content">
              Nguyên liệu cần để nấu món măng tây xào tỏi
                500g măng tây xanh
                2 muỗng canh dầu lạc (dầu đậu phộng)...
            </div>

        </div>
        <div class="item-new">

            <div>
              <a href="#"><img class="img-news" 
                src="{{('')}}//imgs/menu-products.jpg"alt="news"></a>
            </div>
            <div class="title-new">
              <a href="#">Súp lơ xanh nấu món gì ngon? </a>
            </div>
            <div class="abridged-content">
              600g ức gà; 250g súp lơ xanh; ½ muỗng cà phê vừng đã rang chín; 
              dầu mè; dầu oliu; bột ngô; hành tây; gừng; mật ong; và các gia vị khác như hành, tiêu, hạt nêm.
            </div>

        </div>
        <div class="item-new">

            <div>
              <a href="#"><img class="img-news" 
                src="{{('')}}//imgs/58468658_280503129504778_6033469487363831565_n.jpg"alt="news"></a>
            </div>
            <div class="title-new">
              <a href="#">Yến mạch là gì </a>
            </div>
            <div class="abridged-content">
              Yến mạch là một loại ngũ cốc, thường được trồng ở những vùng khí hậu ôn đới mát mẻ. Cây khi thu hoạch thường đạt chiều cao 1,5m. 
            </div>

        </div>
      </div>
    </div>
  </section>

  @endsection