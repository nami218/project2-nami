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
                    <li class="breadcrumb-item"><a href="#!">Quản lý danh mục</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Danh mục sản phẩm</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Simple Breadcrumb card start -->
    <!-- Hover table card start -->
    <div class="card">
        <div class="card-header">
            <h5>Danh sách danh mục sản phẩm</h5>
            <div class="text-right">
                <a href="{{ route('admin.product-category.create')}}" class="btn btn-outline-primary">Thêm danh mục</a>
                <button type="submit" class="btn btn-outline-info">Copy</button>
            </div>
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
                            <th>Tên danh mục</th>
                            <th>URL thân thiện</th>
                            <th>Số sản phẩm</th>
                            <th>Hiện/Ẩn</th>
                            <th>Chỉnh sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $productCategories as $productCategory )
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $productCategory->name }}</td>
                            <td>{{ $productCategory->slug }}</td>
                            <td>{{ $productCategory->products->count() }}</td>
                            <td>
                                <a class="btn btn-{{ $productCategory->status ? 'success' : 'warning' }}">
                                        {{ $productCategory->status ? 'Hiện' : 'Ẩn' }}
                                    </a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('admin.product-category.destroy', ['product_category' => $productCategory->id]) }}">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('admin.product-category.show', ['product_category' => $productCategory->id]) }}" class="btn btn-primary">Sửa</a>
                                    <button onclick="return confirm('Chắc chắn xóa?')" type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">Không có danh mục sản phẩm</td>
                        @endforelse
                        {{-- @if (session('message'))
                             <script>
                                Swal.fire(
                                'Thành công',
                                'Thêm danh mục mới!',
                                'success'
                                )
                             </script>
                        @endif --}}
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
