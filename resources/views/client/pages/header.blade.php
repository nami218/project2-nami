<!-- Header Section Begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    revollock.vn@gmail.com
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    +028 3636 7258
                </div>
            </div>
            <div class="ht-right">
                <a href="{{ route('login') }}" class="login-panel"><i class="fa fa-user"></i>Đăng nhập</a>
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='yu' data-image="{{ asset('client/img/flag-3.jpg') }}" data-imagecss="flag yu"
                            data-title="Bangladesh">Vietnam</option>
                            <option value='yt' data-image="{{ asset('client/img/flag-1.jpg') }}" data-imagecss="flag yt"
                            data-title="English">English</option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{ route('home')}}">
                            <img src="{{ asset('client/img/logo-revol-lock.png') }}" alt="Khóa cổng vân tay" width="80px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">Tìm kiếm</button>
                        <div class="input-group">
                            <input type="text" placeholder="Bạn cần tìm sản phẩm gì?">
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="si-pic"><img src="{{ asset('client/img/select-product-1.jpg') }}" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Khóa cổng thẻ từ BASIC-RV1</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-pic"><img src="{{ asset('client/img/select-product-2.jpg') }}" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Khóa cổng thẻ từ BASIC-RV2</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>$120.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">$150.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item sticky-top" >
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>DANH MỤC</span>
                    <ul class="depart-hover">
                        @foreach ($productCategories as $productCategory)
                            <li><a href="{{ route('danhmuc.list', ['slug' => $productCategory->slug]) }}">{{ $productCategory->name }}</a></li>
                        @endforeach
                    </ul>



                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="{{ route('home') }}">TRANG CHỦ</a></li>
                    <li><a href="{{ route('gioithieu') }}">GIỚI THIỆU</a></li>
                    <li><a href="{{ route('cuahang') }}">SẢN PHẨM</a></li>
                    <li><a href="{{ route('tintuc') }}">TIN TỨC</a></li>
                    <li><a href="{{ route('congtrinh') }}">CÔNG TRÌNH</a></li>
                    <li><a href="{{ route('lienhe') }}">LIÊN HỆ</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!-- Header End -->
