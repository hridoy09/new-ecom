
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
                                        <h2>Add stock</h2>
                                        <form action="{{ route('stock.update', $stock->id) }}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <label for="">Choose Product</label>
                                            <select class="form-control w-25" name="product_id" id="">
                                                <option value="">Choose Category</option>
                                                @foreach ($products as $product )
                                                <option value="{{ $product->id }}" {{$product->id == $stock->product_name ? 'selected' : ''}}>{{ $product->title}}</option>
                                                @endforeach

                                            </select>
                                            <label for=""> Stock </label>
                                            <input type="integer" name="total_stock" value="{{ $stock->total_stock}}" class="form-control w-25" >
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


