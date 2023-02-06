
@extends('admin.layouts.app')
@section('content')


                <div class="page-content">
                    <div class="container-fluid">
                         <!-- start page title -->
                        {{-- <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                                </div>
                            </div>
                        </div> --}}
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Add subCategory</h2>
                                        <form action="{{ route('product.update', $product->id) }}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <label for="">Choose Category</label>
                                            <select class="form-control w-25" name="category_id" id="">
                                                <option value="">Choose Category</option>
                                                @foreach ($categories as $category )
                                                <option value="{{ $category->id }}" {{$category->id == $subcategory->category_id ? 'selected' : ''}}>{{ $category->name }}</option>
                                                @endforeach

                                                <label for="">Choose SubCategory</label>
                                                <select class="form-control w-25" name="subcategory_id" id="">
                                                    <option value="">Choose SubCategory</option>
                                                    @foreach ($subcategories as $subcategory )
                                                    <option value="{{ $subcategory->id }}" {{$subcategory->id == $product->subcategory_id ? 'selected' : ''}}>{{ $subcategory->name }}</option>
                                                    @endforeach

                                            </select>
                                            <label for=""> Product</label>
                                            <input type="text" name="category_id" value="{{ $product->category_id}}" class="form-control w-25" >
                                            <input type="text" name="subcategory_id" value="{{ $product->subcategory_id}}" class="form-control w-25" >
                                            <input type="text" name="image" value="{{ $product->image}}" class="form-control w-25" >
                                            <input type="text" name="title" value="{{ $product->title}}" class="form-control w-25" >
                                            <input type="text" name="price" value="{{ $product->price}}" class="form-control w-25" >
                                            <Button class="btn btn-md btn-primary mt-4" type="submit"> Submit</Button>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

 @endsection


