@extends('client.layout.master')
@section('content')
   <!-- Breadcrumb Section Begin -->
   <div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./home.html"><i class="fa fa-home"></i>Trang chủ</a>
                    <a href="./shop.html">Sản phẩm</a>
                    <span>Chi tiết</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Danh mục</h4>
                    <ul class="filter-catagories">
                        <li><a href="#">Khóa cổng thẻ từ</a></li>
                        <li><a href="#">Khóa cổng vân tay</a></li>
                        <li><a href="#">Khóa vân tay qua app</a></li>
                        <li><a href="#">Khóa cửa vân tay</a></li>
                        <li><a href="#">Cổng tự động</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Giá</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                            data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Bộ lọc</a>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Thẻ</h4>
                    <div class="fw-tags">
                        <a href="#">Khóa cổng</a>
                        <a href="#">Khóa thẻ từ</a>
                        <a href="#">Khóa vân tay</a>
                        <a href="#">Khóa cửa</a>
                        <a href="#">Cổng tự động</a>
                        <a href="#">Motor trượt</a>
                        <a href="#">Khóa qua app</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="{{ asset('client/img/products/khoa-cong-the-tu-basic-rv1.jpg')}}" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="{{ asset('client/img/products/khoa-cong-the-tu-basic-rv1.jpg')}}"><img
                                        src="{{ asset('client/img/products/khoa-cong-the-tu-basic-rv1.jpg')}}" alt=""></div>
                                <div class="pt" data-imgbigurl="{{ asset('client/img/products/khoa-cong-the-tu-basic-rv1.jpg')}}"><img
                                        src="{{ asset('client/img/products/khoa-cong-the-tu-basic-rv1.jpg')}}" alt=""></div>
                                <div class="pt" data-imgbigurl="{{ asset('client/img/products/khoa-cong-the-tu-basic-rv1.jpg')}}"><img
                                        src="{{ asset('client/img/products/khoa-cong-the-tu-basic-rv1.jpg')}}" alt=""></div>
                                <div class="pt" data-imgbigurl="{{ asset('client/img/products/khoa-cong-the-tu-basic-rv1.jpg')}}"><img
                                        src="{{ asset('client/img/products/khoa-cong-the-tu-basic-rv1.jpg')}}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>KHÓA CỔNG</span>
                                <h3>KHÓA CỔNG THẺ TỪ BASIC-RV1</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(5)</span>
                            </div>
                            <div class="pd-desc">
                                <p>Dòng sản phẩm: BASIC-RV1
                                    Thông tin sản phẩm:
                                    Phương thức mở khóa: Thẻ từ, Remote từ xa, Chìa cơ.
                                    Phù hợp với nhiều loại cửa: sắt, gỗ, nhôm, thép,...
                                    </p>
                                <h4>$495.00 <span>629.99</span></h4>
                            </div>
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                                <a href="#" class="primary-btn pd-cart">Thêm vào giỏ</a>
                            </div>
                            <div class="pd-share">
                                <div class="p-code">MÃ SẢN PHẨM : 00012</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab-1" role="tab">MÔ TẢ SẢN PHẨM</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-2" role="tab">THÔNG SỐ KỸ THUẬT</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>GIỚI THIỆU</h5>
                                            <p>KHÓA CỔNG THẺ TỪ BASIC-RV1 BAO GỒM

                                                + 01 Khóa cổng điện tử

                                                + 01 Bộ nguồn 12V- 2A

                                                + 10 Thẻ từ móc khóa

                                                + 01 Remote điều khiển từ xa

                                                + 01 Nam châm siêu cường

                                                + 03 Chìa khóa cơ dự phòng

                                                Tặng kèm 10m dây 2 lõi và 1m ống dẻo đen. </p>
                                            <h5>TÍNH NĂNG</h5>
                                            <p>Có chức năng kết nối với màn hình chuông cửa để mở khóa
                                                Tự động khóa khi cửa được đóng đúng vị trí, tiếng ồn thấp.
                                                Lưu trữ: 2000 thẻ
                                                Vật liệu: hợp kim, mạ niken
                                                Nguồn điện sử dụng: 12-18V DC.
                                                Thương hiệu: Revol Lock</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <table>
                                        <tr>
                                            <td class="p-catagory">Customer Rating</td>
                                            <td>
                                                <div class="pd-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>(5)</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Price</td>
                                            <td>
                                                <div class="p-price">$495.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Add To Cart</td>
                                            <td>
                                                <div class="cart-add">+ add to cart</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Availability</td>
                                            <td>
                                                <div class="p-stock">22 in stock</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Weight</td>
                                            <td>
                                                <div class="p-weight">1,3kg</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Size</td>
                                            <td>
                                                <div class="p-size">Xxl</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Color</td>
                                            <td><span class="cs-color"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Sku</td>
                                            <td>
                                                <div class="p-code">00012</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->
@endsection
