@extends('client.layout.master')
@section('content')
      <!-- Product Shop Section Begin -->
     <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Danh mục sản phẩm</h4>
                        <ul class="filter-catagories">
                            @foreach ($productCategories as $productCategory)
                            <div class="fw-tags">
                              <li><a href="{{ route('danhmuc.list', ['slug' => $productCategory->slug]) }}">{{ $productCategory->name }}</a></li>
                            </div>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Default Sorting</option>
                                    </select>
                                    <select class="p-show">
                                        <option value="">Show:</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01- 09 Of</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @forelse ($listProduct as $product)
                            <div class="col-lg-4 col-sm-6">
                                {{-- <a href="">{{ $product->name}}</a> --}}
                                <div class="product-item">
                                    <div class="pi-pic ">
                                    @php
                                        $imageLink = (is_null($product->image_url) || !file_exists("backend/images/products/" . $product->image_url))
                                         ? 'default-product-image.png' : $product->image_url;
                                     @endphp
                                        <img src="{{ asset('backend/images/products/'.$imageLink) }}" alt="{{ $product->name }}">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="#">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        {{-- <div class="catagory-name">{{ $product->name}}</div> --}}
                                        <a href="#">
                                            <a href="">{{ $product->name}}</a>
                                        </a>
                                        <div class="product-price">
                                            {{ number_format($product->discount_price,0) }}
                                            <span>{{ number_format($product->price, 0) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                No Product
                            @endforelse
                        </div>
                    </div>
                    {{-- <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">
                            Loading More
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
@endsection
