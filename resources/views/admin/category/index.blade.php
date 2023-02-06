
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
                                        <h2>Add Category</h2>
                                        <form action="{{ route('category.store') }}" method="POST">
                                            @csrf
                                            <label for=""> Category</label>
                                            <input type="text" name="name" class="form-control w-25" >
                                            <Button class="btn btn-md btn-primary mt-4" type="submit"> Submit</Button>

                                        </form>



                                        <h4 class="card-title mb-4 mt-5">Latest Transaction</h4>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>

                                                        <th class="align-middle">Id</th>
                                                        <th class="align-middle">Name</th>
                                                        <th class="align-middle">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (@$categories as $category )
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $category->name }}</td>
                                                        <td>
                                                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-md btn-warning">Edit</a>
                                                            <form action="{{ route('category.destroy',$category->id) }}" method="POST">
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

 @endsection


