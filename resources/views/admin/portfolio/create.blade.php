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


         @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>

            @endforeach
        </ul>

    </div>

    @endif

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>

    @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Portfolio Section</h4>
                        {{-- for update message --}}
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        {{-- end message --}}

                        <form action="{{ route('portfolio.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="formrow-firstname-input" placeholder="">



                            </div>

                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label ">Git_Link</label>
                                <input type="git_link" class="form-control @error('git_link') is-invalid @enderror" name="git_link" id="formrow-firstname-input" placeholder="">



                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label ">Behance_Link</label>
                                <input type="text" class="form-control @error('behance_link') is-invalid @enderror" name="behance_link" id="formrow-firstname-input" placeholder="">



                            </div>

                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Youtube_Link</label>
                                <input type="text" class="form-control @error('youtube_link') is-invalid @enderror" name="youtube_link" id="formrow-firstname-input" placeholder="">
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
