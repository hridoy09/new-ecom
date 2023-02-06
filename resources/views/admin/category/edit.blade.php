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
                                        <form action="{{ route('category.update', $category->id) }}" method="post">
                                            @csrf
                                            @method('PATCH')

                                            <label for=""> Category</label>
                                            <input type="text" name="name" value="{{ $category->name }}" class="form-control w-25" >
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


