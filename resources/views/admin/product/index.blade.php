
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
                                        <h2>Product</h2>
                                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <label for="">Choose Category</label>
                                            <select class="form-control w-25" name="category_id" id="">
                                                <option value="">Choose Category</option>
                                                @foreach ($categories as $category )
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach

                                            </select>


                                            <label for="">Choose SubCategory</label>
                                            <select class="form-control w-25" name="subcategory_id" id="">
                                                <option value="">Choose SubCategory</option>
                                                @foreach ($subcategories as $subcategory )
                                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                                @endforeach

                                            </select>



                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control w-25" >
                                            <label for="">Title</label>
                                            <input type="text" name="title" class="form-control w-25" >
                                            <label for="">Price</label>
                                            <input type="text" name="price" class="form-control w-25" >

                                            <Button class="btn btn-md btn-primary mt-4" type="submit"> Submit</Button>

                                        </form>



                                        <h4 class="card-title mb-4 mt-5">Latest Transaction</h4>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>

                                                        <th class="align-middle">Id</th>
                                                        <th class="align-middle">Image</th>
                                                        <th class="align-middle">Title</th>
                                                        <th class="align-middle">Price</th>

                                                        <th class="align-middle">Action</th>
                                                    </tr>
                                                </thead>
                                                {{--  <tbody>
                                                    @foreach (@$products as $product )
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ @$product->subcategory->category->title }}</td>
                                                        <td>{{ $product->title }}</td>
                                                        <td>
                                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-md btn-warning">Edit</a>
                                                            <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                              <button class="btn btn-md btn-danger" >Delete </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>  --}}
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
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


