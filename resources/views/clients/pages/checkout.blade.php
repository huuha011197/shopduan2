@extends('clients.layouts.master')
@section('title')
Đặt hàng
@endsection
@section('content')
<!-- Title Page -->
@if(Session::has('thongbao'))
    <script> alert('<div> <p> Đặt hàng thành công!</p></div>') </script>
    <script> window.location.href = window.location.origin + '/shopduan2/public/'</script>

@endif
@if(Session::has('cart'))
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m"
    style="background-image: url({{asset('client/images/cart.jpg')}});">
    <h2 class="l-text2 t-center">
        Đặt hàng
    </h2>
</section>

<div class="container">
    <div id="content">

        <form action="{{route('dathang2')}}" method="post" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <h4>Đặt hàng</h4>
                    <div class="space20">&nbsp;</div>

                    <div class="form-block">
                        <label for="name">Họ tên*</label>
                        <input type="text" name="name" id="name" placeholder="Họ tên" required="">
                    </div>
                    <div class="form-block">
                        <label>Giới tính </label>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked"
                            style="width: 10%"><span style="margin-right: 10%">Nam</span>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="nữ"
                            style="width: 10%"><span>Nữ</span>

                    </div>

                    <div class="form-block">
                        <label for="email">Email*</label>
                        <input type="email" id="email" name="email" required="" placeholder="expample@gmail.com">
                    </div>

                    <div class="form-block">
                        <label for="adress">Địa chỉ*</label>
                        <input type="text" id="adress" name="address" placeholder="Street Address" required="">
                    </div>


                    <div class="form-block">
                        <label for="phone">Điện thoại*</label>
                        <input type="text" id="phone" name="phone" required="">
                    </div>

                    <div class="form-block">
                        <label for="notes">Ghi chú</label>
                        <textarea id="notes" name="notes"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head">
                            <h5>Đơn hàng của bạn</h5>
                        </div>
                        <div class="your-order-body" style="padding: 0px 10px">
                            <div class="your-order-item">
                                <div>
                                    <!--  one item	 -->
                                    <div class="media">
                                        <div class="media-body">
                                            {{-- <p class="font-large">ĐỒNG HỒ EPOS SWISS E-7000.701.22.16.26</p>
                                            <span class="color-gray your-order-info"> Đơn giá: {{$cart->items->price}}</span>
                                            <span class="color-gray your-order-info"> Số lượng:
                                                {{$cart->items->qty}}</span>
                                            <span class="color-gray your-order-info"> Thành tiền:
                                                {{$cart->items->price * $cart->items->qty }} đ </span> --}}
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Tên sản phẩm</th>
                                                        <th>Só lượng</th>
                                                        <th>Đơn giá</th>
                                                        <th>Thành tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($cart->items as $key => $item)
                                                    <tr>
                                                        <td>{{$key}}</td>
                                                        <td scope="row">{{$item['item']->name}}</td>
                                                        <td>{{$item['qty']}}</td>
                                                        <td>{{number_format($item['price'])}} đ</td>
                                                        <td>{{ number_format($item['price'] * $item['qty'])}} đ</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end one item -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="your-order-item">
                                <div class="pull-left">
                                    <p class="your-order-f18">Tổng tiền:</p>
                                </div>
                                <div class="pull-right">
                                    <h5 class="color-black"> {{number_format(Session('cart')->totalPrice)}} đ</h5>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="your-order-body">
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment"
                                        value="COD" checked="checked" data-order_button_text="">
                                    <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                                    <div class="payment_box payment_method_bacs" style="display: block;">
                                        Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho
                                        nhân viên giao hàng
                                    </div>
                                </li>

                                <li class="payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment"
                                        value="ATM" data-order_button_text="">
                                    <label for="payment_method_cheque">Chuyển khoản </label>
                                    <div class="payment_box payment_method_cheque" style="display: none;">
                                        Chuyển tiền đến tài khoản sau:
                                        <br>- Số tài khoản: 123 456 789
                                        <br>- Chủ TK: Nguyễn A
                                        <br>- Ngân hàng ACB, Chi nhánh TPHCM
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="text-center"><button type="submit" class="beta-btn primary">Đặt hàng <i
                                    class="fa fa-chevron-right"></i></button></div>
                    </div> <!-- .your-order -->
                </div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->


<script type="text/javascript">
    $(function () {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".main-menu a").each(function () {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
                $(this).parents('li').addClass('parent-active');
            }
        });
    });

</script>
<script>
    jQuery(document).ready(function ($) {
        'use strict';

        // color box

        //color
        jQuery('#style-selector').animate({
            left: '-213px'
        });

        jQuery('#style-selector a.close').click(function (e) {
            e.preventDefault();
            var div = jQuery('#style-selector');
            if (div.css('left') === '-213px') {
                jQuery('#style-selector').animate({
                    left: '0'
                });
                jQuery(this).removeClass('icon-angle-left');
                jQuery(this).addClass('icon-angle-right');
            } else {
                jQuery('#style-selector').animate({
                    left: '-213px'
                });
                jQuery(this).removeClass('icon-angle-right');
                jQuery(this).addClass('icon-angle-left');
            }
        });
    });
</script>
</div>
@else
<div class="container">
    <div style="margin: 50px 50px 50px;" class="alert alert-primary" role="alert">
        <strong>Giỏ hàng trống</strong>
    </div>
</div>
@endif

@endsection