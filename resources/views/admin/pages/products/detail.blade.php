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
                    <li class="breadcrumb-item"><a href="#!">Chỉnh sửa sản phẩm</a>
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
                    <h5>Cập nhật sản phẩm</h5>
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
                    <form action="{{ route('admin.product.update', ['product' => $product[0]->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name"
                                placeholder="Nhập tên sản phẩm" value="{{ $product[0]->name }}">
                                @error('name')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">URL thân thiện</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="slug" id="slug"
                                value="{{ $product[0]->slug }}">
                                @error('slug')
                                     <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">SKU</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $product[0]->sku }}"
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
                                placeholder="Nhập giá sản phẩm" value="{{ $product[0]->price }}">
                                @error('price')
                                 <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Giá khuyến mãi</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="discount_price" id="discount_price"
                                placeholder="Nhập giá khuyến mãi" value="{{ $product[0]->discount_price }}">
                                @error('discount_price')
                                 <div class="alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mô tả ngắn</label>
                                <div class="col-sm-10">
                                    <textarea rows="10" class="form-control"
                                    name="short_description" id="short_description"
                                    >{{ $product[0]->short_description }}</textarea>
                                    @error('short_description')
                                        <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Số lượng</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="qty" id="qty"
                                placeholder="Nhập số lượng tồn kho" value="{{ $product[0]->qty }}">
                                @error('qty')
                                <div class="alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Trọng lượng</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="weight" id="weight"
                                    placeholder="Nhập trọng lượng (kg)" value="{{ $product[0]->weight }}">
                                    @error('weight')
                                        <div class="alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Vận chuyển</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="shipping" id="shipping"
                                        placeholder="Nhập giá vận chuyển" value="{{ $product[0]->shipping }}">
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
                                          <option @if($product[0]->product_category_id === $productCategory->id) selected @endif value="{{ $productCategory->id }}">{{ $productCategory->name }}</option>
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
                                            placeholder="Nhập thông số kỹ thuật">{{ $product[0]->specification }}</textarea>
                                            @error('specification')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hình ảnh</label>
                                        <div class="col-sm-10">
                                            <input multiple type="file" name="image_url" id="image_url" class="form-control">
                                            @php
                                              $imageLink = (is_null($product[0]->image_url) || !file_exists("backend/images/products/".$product[0]->image_url)) ? 'default-product-image.jpg' : $product[0]->image_url;
                                              @endphp
                                              <div class="img-detail">
                                                <p>Ảnh đại diện</p>
                                                @php

                                                @endphp
                                                <img src="{{ asset('backend/images/products/'.$imageLink) }}" alt="{{ $product[0]->name }}" width="100">
                                            </div>

                                            @error('image_url')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Mô tả chi tiết</label>
                                        <div class="col-sm-10">
                                            <textarea rows="10" cols="10" class="form-control" name="description" id="description"
                                            placeholder="Mô tả chi tiết của sản phẩm">{{ $product[0]->description }}</textarea>
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
                                                <option {{ $product[0]->status ? 'selected' : '' }} value="1">Hiện</option>
                                                <option {{ !$product[0]->status ? 'selected' : '' }} value="0">Ẩn</option>
                                            </select>
                                            @error('status')
                                                 <div class="alert-danger">{{ $message }}</div>
                                             @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{ $product[0]->id }}">
                                    <div class="text-right">
                                        <button type="submit" class="btn waves-effect waves-light btn-grd-primary">Cập nhật sản phẩm</button>
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
{{-- textarea cho description va specification --}}
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
<script>
    ClassicEditor
        .create( document.querySelector( '#short_description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

{{-- slug --}}
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

{{-- save image --}}
{{-- <script type="text/javascript">
$(document).ready(function() {
    $('form').on('submit', function(event) {
        event.preventDefault();

        var formData = new FormData($(this)[0]);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.success) {
                    $('#image').attr('src', '{{ asset('') }}' + response.path);
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    });
});
</script> --}}

@endsection
