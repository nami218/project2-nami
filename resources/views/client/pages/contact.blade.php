@extends('client.layout.master')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('home')}}"><i class="fa fa-home"></i>Trang chủ</a>
                        <span>Liên hệ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Liên hệ chúng tôi</h4>
                        <p>Revol Lock chuyên cung cấp và lắp đặt các loại khóa vân tay điện tử cho nhà trọ, nhà ở, homestay, hotel, văn phòng...</p>
                            <p>Mở khóa bằng nhiều phương thức như vân tay, thẻ từ, mật mã, chìa cơ, app điện thoại.</p>
                           {{-- <p>Hàng hóa được nhập khẩu chính hãng từ Hàn, Trung Quốc, Đài Loạn với chế độ bảo hành 12 tháng và lắp đặt tận nơi.</p> --}}
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Địa chỉ:</span>
                                <p>134/28 Man Thiện, P. Tăng Nhơn Phú A, TP. Thủ Đức, TP.HCM</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Hotline:</span>
                                <p>028 3636 7258  -  0379 50 0379</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p>revollock.vn@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Nhận tư vấn miễn phí</h4>
                            <p>Xin vui lòng để lại thông tin để nhận ưu đãi và tư vấn miễn phí từ đội ngũ Revol Lock ngay nhé!</p>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Tên của bạn">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" placeholder="Số điện thoại của bạn">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Để lại tin nhắn của bạn tại đây nhé!"></textarea>
                                        <button type="submit" class="site-btn">Gửi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                    height="400" style="border:0" allowfullscreen="">
                </iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section Begin -->
@endsection
