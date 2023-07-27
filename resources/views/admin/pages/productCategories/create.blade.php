@extends('admin.layout.master')
@section('content')
<div class="main-body">
    <div class="page-wrapper">

<!-- Page body start -->
<div class="page-body">
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
                    <li class="breadcrumb-item"><a href="#!">Quản lí danh mục sản phẩm</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Thêm danh mục</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Simple Breadcrumb card start -->
    <div class="row">
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Thêm danh mục</h5>
                </div>
                <div class="card-block">
                    <h4 class="sub-title">Danh mục</h4>
                    {{-- @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li><span style="color:red">{{ $error }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <form action="{{ route('admin.product-category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tên danh mục</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name"
                                placeholder="Nhập tên danh mục sản phẩm">
                                @error('name')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">URL thân thiện</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="slug" id="slug">
                                @error('slug')
                                     <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                             <label class="col-sm-2 col-form-label">Trạng thái</label>
                                <div class="col-sm-10">
                                    <select name="status" id="status" class="form-control">
                                        <option value="">--Chọn trạng thái--</option>
                                        <option value="1">Hiện</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                 @error('status')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn waves-effect waves-light btn-grd-primary">Tạo danh mục</button>
                        </div>
                    </form>
                 </div>
            </div>
                        <!-- Basic Form Inputs card end -->
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-custom')
<script type="text/javascript">
    $(document).ready(function(){
        $('#name').on('keyup', function(){
            let name = $(this).val();
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.product-category.slug') }}",
                data: {
                    name: name,
                    _token: "{{ csrf_token()}}"
                },
                success: function(res){
                    $('#slug').val(res.slug);
             },
             error: function(res){

             }

            });
        });
    });
</script>
@endsection

