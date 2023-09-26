@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="my-3">
                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="my-3">
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="my-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="profile" class="custom-file-input">
                                <label class="custom-file-label">Thumbnail</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-wrench"></i>
                    </span>Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
