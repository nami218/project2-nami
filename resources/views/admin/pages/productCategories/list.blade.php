@extends('admin.layout.master')
@section('content')
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
    <!-- Simple Breadcrumb card start -->
    <div class="card">
        <div class="card-block">
            <h5>Simple Breadcrumb</h5>
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="#!">
                            <i class="icofont icofont-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Simple Breadcrumb</a>
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
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Hiện/Ẩn</th>
                            <th>Chỉnh sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>

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
