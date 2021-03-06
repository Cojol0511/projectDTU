@extends('home')
@section('checkout')


<section class="section-checkout">
    <div class="out-up">
        <div class="up">
            Bạn đã có tài khoản?
            <a href="#">Ấn vào đây để đăng nhập</a>
        </div>

        <div class="up">
            Bạn có mã ưu đãi?
            <a class="b" href="#">Ấn vào đây để nhập mã</a>
        </div>
        <div class="gachchan">
            <h1></h1>
        </div>
    </div>

        <div class="row">
            <div class="row-1">             
                <h1>Thông Tin Thanh Toán</h1>
                <div>
                    <h4>Tên *</h4>
                    <input class="outline-name" type="text" style="width: 100%; height: 40px">
                </div>
                <div>
                    <h4>Quốc gia *</h4>
                    <!-- <input class="outline" type="text"> -->
                    <select  class="select">
                        <option value="value1">Việt Nam</option>
                        <option value="value2">English</option>
                        <option value="value3">Chines</option>
                        <option value="value4">Korea</option>
                        <option value="value5">Spain</option>
                    </select>
                </div>
                <div>
                    <h4>Địa chỉ *</h4>
                    <input class="outline" type="text" placeholder="Địa chỉ">
                </div>
                <div>
                    <h4>Tỉnh / Thành phố *</h4>
                    <input class="outline" type="text">
                </div>
                <div>
                    <h4>Số điện thoại *</h4>
                    <input class="outline" type="text">
                </div>
                <div>
                    <h4>Địa chỉ email *</h4>
                    <input class="outline" type="text">
                </div>
    
                <div class="end-checkout">
                    <h4>Ghi chú đơn hàng (tuỳ chọn)</h4>
                    <input class="ghi-chu" type="text"
                      class="intext"  placeholder="Ghi chú đơn hàng,ví dụ:thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn">
                </div>
            </div>
    
            <div class="row-2">
                <div class="outline-row-2">
                    <div class="text-header">
                        <h1>ĐƠN HÀNG CỦA BẠN</h1>
                        <table style="width: 100%;">
                            <tr>
                                <th class="left">SẢN PHẨM</th>
                                <th class="right">TỔNG</th>
                            </tr>
    
                            <tr>
                                <td>Xoài &#215;1</td>
                                <td class="right">
                                    <p>250.000 &#8363;</p>
                                </td>
                            </tr>
    
                            <tr>
                                <th class="left">Tổng phụ</th>
                                <td class="right">
                                    <p>250.000 &#8363;</p>
                                </td>
                            </tr>
    
                            <tr>
                                <td class="left">Giao hàng</td>
                                <td class="right">Giao hàng miễn phí</td>
                            </tr>
    
                            <tr>
                                <th class="left">Tổng</th>
                                <td class="right">
                                    <p>250.000 &#8363;</p>
                                </td>
                            </tr>
                        </table>
                    </div>
    
                    <div>
                        <input type="radio" name="tra-tien" id="tra-tien">
                        <label for="tra-tien">Trả tiền mặt khi nhận hàng</label>
                        <br> <br>
                        <input type="radio" name="chuyen-khoan" id="chuyen-khoan">
                        <label for="chuyen-khoan">Chuyển khoản ngân hàng</label>
                        <br> <br>
                        <input class="dat-hang" type="submit" value="Đặt Hàng">
                    </div>
                </div>
            </div>
        </div>

    
</section>

@endsection