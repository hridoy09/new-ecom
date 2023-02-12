
@extends('admin.layouts.app')
@section('content')

<main id="main"  class="main-site">
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
                                        <h2>Add Stock</h2>
                                        <form action="{{ route('stock.store') }}" method="POST">
                                            @csrf

                                            <label for="">Choose Product</label>
                                            <select class="form-control w-25" name="product_id" id="">
                                                <option value="">Choose Product</option>
                                                @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->title }}</option>
                                                @endforeach

                                            </select>
                                            <label for="">Stock</label>

                                            <input type="text" name="total_stock" class="form-control w-25" >
                                            <Button class="btn btn-md btn-primary mt-4" type="submit"> Submit</Button>

                                        </form>

                                        <h4 class="card-title mb-4 mt-5">Latest Transaction</h4>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>

                                                        <th class="align-middle">Id</th>
                                                        <th class="align-middle">Product name</th>
                                                        <th class="align-middle">Total Stock</th>
                                                        <th class="align-middle">Total Price</th>
                                                        <th class="align-middle">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (@$stocks as $stock)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ @$stock->product->title}}</td>
                                                        <td>{{ $stock->total_stock}}</td>
                                                        <td>{{ $stock->total_price}}</td>
                                                        <td>
                                                            <a href="{{ route('stock.edit', $stock->id) }}" class="btn btn-md btn-warning">Edit</a>
                                                            <form action="{{ route('stock.destroy',$stock->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                              <button class="btn btn-md btn-danger" >Delete </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
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
</main>
 @endsection


