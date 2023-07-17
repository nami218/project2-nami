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
                    <li class="breadcrumb-item"><a href="#!">Quản lí sản phẩm</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Thêm sản phẩm</a>
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
                    <h5>Thêm sản phẩm</h5>
                </div>
                <div class="card-block">
                    <h4 class="sub-title">Sản phẩm</h4>
                    {{-- @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li><span style="color:red">{{ $error }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <form action="{{ route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name"
                                placeholder="Nhập tên sản phẩm">
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
                            <label class="col-sm-2 col-form-label">SKU</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                placeholder="Nhập mã sản phẩm" name="sku" id="sku">
                                @error('sku')
                                  <div class="alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Giá</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="price" id="price"
                                placeholder="Nhập giá sản phẩm">
                                @error('price')
                                 <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Giá khuyến mãi</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="discount_price" id="discount_price"
                                placeholder="Nhập giá khuyến mãi">
                                @error('discount_price')
                                 <div class="alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mô tả ngắn</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="short_description" id="short_description"
                                    placeholder="Mô tả ngắn">
                                    @error('short_description')
                                    <div class="alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Số lượng</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="qty" id="qty"
                                placeholder="Nhập số lượng tồn kho">
                                @error('qty')
                                <div class="alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Trọng lượng</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="weight" id="weight"
                                    placeholder="Nhập trọng lượng (kg)">
                                    @error('weight')
                                        <div class="alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Vận chuyển</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="shipping" id="shipping"
                                        placeholder="Nhập giá vận chuyển">
                                        @error('shipping')
                                         <div class="alert-danger">{{ $message }}</div>
                                       @enderror
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Danh mục sản phẩm</label>
                                <div class="col-sm-10">
                                    <select name="product_category_id" id="product_category_id" class="form-control">
                                        <option value="">--Chọn danh mục--</option>
                                        @foreach ( $productCategories as $productCategory)
                                          <option value="{{ $productCategory->id }}">{{ $productCategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('product_category_id')
                                         <div class="alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                            </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Thông số kỹ thuật</label>
                                        <div class="col-sm-10">
                                            <textarea rows="5" cols="5" class="form-control"
                                            name="specification" id="specification"
                                            placeholder="Nhập thông số kỹ thuật"></textarea>
                                            @error('specification')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hình ảnh</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image_url" id="image_url" class="form-control">
                                            @error('image_url')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Mô tả chi tiết</label>
                                        <div class="col-sm-10">
                                            <textarea rows="10" cols="10" class="form-control" name="description" id="description"
                                            placeholder="Mô tả chi tiết của sản phẩm"></textarea>
                                            @error('description')
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
                                        <button type="submit" class="btn waves-effect waves-light btn-grd-primary">Tạo sản phẩm</button>
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

<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#specification' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#name').on('keyup', function(){
            let name = $(this).val();
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.product.slug') }}",
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

