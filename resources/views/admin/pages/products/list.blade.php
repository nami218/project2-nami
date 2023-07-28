@extends('admin.layout.master')
@section('content')
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Simple Breadcrumb card start -->
                <div class="card">
                    <div class="card-block">
                        <h5>Admin</h5>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="#!">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Quản lý sản phẩm</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Danh sách sản phẩm</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Simple Breadcrumb card start -->
                <!-- Hover table card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>DANH SÁCH SẢN PHẨM</h5>
                        <div class="text-right">
                            <a href="{{ route('admin.product.create') }}" class="btn btn-outline-primary">Thêm sản phẩm</a>
                            <button type="submit" class="btn btn-outline-info">Copy</button>
                        </div>
                        <!--nút search-->
                        <div>
                            <form method="GET">
                                <input type="text" placeholder="Search..." name="keyword"
                                    value="{{ is_null(request()->keyword) ? '' : request()->keyword }}">
                                <label for="status">Status</label>
                                <select name="status" id="status">
                                    <option @if (request()->status === '') selected @endif value="">---Select
                                        All---</option>
                                    <option @if (request()->status === '1') selected @endif value="1">Show</option>
                                    <option @if (request()->status === '0') selected @endif value="0">Hide</option>
                                </select>
                                <!-- Sort -->
                                <label for="sort">Sort</label>
                                <select name="sort" id="sort">
                                    <option @if (request()->sort === '0') selected @endif value="0">Lastest
                                    </option>
                                    <option @if (request()->sort === '1') selected @endif value="1">Price Low to
                                        High</option>
                                    <option @if (request()->sort === '2') selected @endif value="2">Price High to
                                        Low</option>
                                </select>
                                <!-- Price -->
                                {{-- <p>
                                    <label for="amount">Price range:</label>
                                    <input type="text" id="amount" readonly
                                        style="border:0; color:#f6931f; font-weight:bold;">
                                    <input type="hidden" id="amount_start" name="amount_start">
                                    <input type="hidden" id="amount_end" name="amount_end">
                                </p>
                                <div id="slider-range"></div> --}}

                                <button type="submit">Search</button>
                            </form>
                        </div>
                        <!-- end search -->


                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                                <li><i class="fa fa-refresh reload-card"></i></li>
                                <li><i class="fa fa-trash close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>
                                            <input type="checkbox" name="" id="">
                                        </th>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        {{-- <th>SKU</th> --}}
                                        <th>Giá</th>
                                        <th>Giá khuyến mãi</th>
                                        <th>Số lượng</th>
                                        <th>Hiện/Ẩn</th>
                                        <th>Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <th>
                                                <input type="checkbox" name="" id="">
                                            </th>
                                            <td>
                                                @php
                                                    $imageLink = is_null($product->image_url) || !file_exists('backend/images/products/' . $product->image_url) ? 'default-product-image.jpg' : $product->image_url;
                                                @endphp
                                                <img src="{{ asset('backend/images/products/' . $imageLink) }}"
                                                    alt="{{ $product->name }}" width="50">
                                            <td>{{ $product->name }}</td>
                                            {{-- <td>{{ $product->sku}}</td> --}}
                                            <td>{{ number_format($product->price, 0) }}</td>
                                            <td>{{ number_format($product->discount_price,0) }}</td>
                                            <td>{{ $product->qty }}</td>
                                            <td>
                                                <a
                                                    class="btn btn-round  btn-{{ $product->status ? 'success' : 'warning' }}">{{ $product->status ? 'Hiện' : 'Ẩn' }}</a>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                    action="{{ route('admin.product.destroy', ['product' => $product->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('admin.product.show', ['product' => $product->id]) }}"
                                                        class="btn btn-round  btn-primary">Sửa</a>
                                                    <button onclick="return confirm('Chắc chắn xóa?')" type="submit"
                                                        class="btn btn-round btn-danger">Xóa</button>
                                                </form>
                                                @if ($product->trashed())
                                                    <form
                                                        action="{{ route('admin.product.restore', ['product' => $product->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Khôi phục</button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <td colspan="9">Không có sản phẩm</td>
                                    @endforelse
                                </tbody>
                            </table>
                            @if (session('message') == 'success')
                                <script>
                                    swal({
                                        title: "Good job!",
                                        text: "You clicked the button!",
                                        icon: "success",
                                    });
                                </script>
                            @endif

                        </div>
                        <div class="clearfix" style="margin: 2% 0%">
                            {{ $products->appends(request()->query())->links() }}
                        </div>
                    </div>

                </div>
                <!-- Hover table card end -->
            </div>
        </div>
    </div>
@endsection
{{-- @section('js-custom')
    <script type="text/javascript">
        $(document).ready(function(){

            $( "#slider-range" ).slider({
                range: true,
                min: {{ $minPrice }},
                max: {{ $maxPrice }},
                values: [ {{  request()->amount_start ?? 0 }}, {{  request()->amount_end ?? $maxPrice }} ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                    $('#amount_start').val(ui.values[0]);
                    $('#amount_end').val(ui.values[1]);
                }
            });

            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
            $('#amount_start').val($( "#slider-range" ).slider( "values", 0 ));
            $('#amount_end').val($( "#slider-range" ).slider( "values", 1 ));
        });
    </script>
@endsection --}}
