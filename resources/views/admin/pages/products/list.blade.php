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
            <h5>Danh sách sản phẩm</h5>
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
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>SKU</th>
                            <th>Giá</th>
                            <th>Giá khuyến mãi</th>
                            <th>Số lượng</th>
                            <th>Hiện/Ẩn</th>
                            <th>Chỉnh sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product )
                        <tr>
                            <th>{{ $loop->iteration}}</th>
                            <td>{{ $product->name}}</td>
                            <td>{{ $product->name}}</td>
                            <td>{{ $product->sku}}</td>
                            <td>{{ $product->price}}</td>
                            <td>{{ $product->discount_price}}</td>
                            <td>{{ $product->qty}}</td>
                            <td>
                                <a class="btn btn-{{ $product->status ? 'success' : 'warning'}}">{{$product->status ? 'Hiện' : 'Ẩn'}}</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('admin.product.destroy', ['product' => $product->id]) }}">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('admin.product.copy', ['product' => $product->id]) }}" class="btn btn-info">Sao chép</a>
                                    <a href="{{ route('admin.product.show', ['product' => $product->id]) }}" class="btn btn-primary">Chỉnh sửa</a>
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                                @if($product->trashed())
                                <form action="{{ route('admin.product.restore', ['product' => $product->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Khôi phục</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @empty
                            <td colspan="0">Không có sản phẩm</td>
                        @endforelse
                        @if (session('message'))
                             {{-- <div class="alert alert-success">{{ session('message') }}</div> --}}
                             <script>
                                Swal.fire(
                                'Good job!',
                                'You clicked the button!',
                                'success'
                                )
                             </script>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Hover table card end -->
        </div>
    </div>
</div>
@endsection
