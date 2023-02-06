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
                        <h4 class="card-title mb-4">Hero Section</h4>
                        {{-- for update message --}}
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        {{-- end message --}}

                        <form action="{{ route('hero.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label ">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="formrow-firstname-input" placeholder="Title">



                            </div>

                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label ">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="formrow-firstname-input" placeholder="">



                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label ">cv_file</label>
                                <input type="file" class="form-control @error('cv_file') is-invalid @enderror" name="cv_file" id="formrow-firstname-input" placeholder="">



                            </div>

                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Descriptuion</label>
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="formrow-firstname-input" placeholder="Description" cols="5" rows="10"></textarea>



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
