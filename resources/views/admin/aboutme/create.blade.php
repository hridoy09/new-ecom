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
                            <h4 class="card-title mb-4">About Me Section</h4>
                            {{-- for update message --}}
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            {{-- end message --}}

                            <form action="{{ route('aboutme.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label ">Description</label>
                                    <input type="text" class="form-control @error('Description') is-invalid @enderror"
                                        name="description" id="formrow-firstname-input" placeholder="Title">

                                </div>

                                
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label ">Completed Project</label>
                                    <input type="text" class="form-control @error('completed_project') is-invalid @enderror"
                                        name="completed_project" id="formrow-firstname-input" placeholder="">



                                </div>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label ">Experienced year</label>
                                    <input type="text" class="form-control @error('experienced_year') is-invalid @enderror"
                                        name="experienced_year" id="formrow-firstname-input" placeholder="">



                                </div>

                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Client Number</label>
                                    <input type="text" class="form-control @error('client_number') is-invalid @enderror"
                                    name="client_number" id="formrow-firstname-input">

                                </div>

                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Customer Reviews</label>
                                    <input type="text" class="form-control @error('customer_reviews') is-invalid @enderror"
                                    name="customer_reviews" id="formrow-firstname-input" placeholder="" cols="5" rows="10"></textarea>

                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
@endsection