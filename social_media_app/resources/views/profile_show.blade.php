@extends('ProfileController.php')
@section('titel', 'profile')

@section('content')
    <div class="container"> 
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="text-secondary fw-bold">User Profile</h2>
                        <a href="{{ route('auth.lagout') }}" class="btn btn-dark">lagout</a>
                    </div>
                    <div class="card-body p-5">
                     <div class="row">
                        <div class="col-lg-4 px-5 text-center">
                          <img src="{{ assets('img/profile.jpg')}}" id="image_preview" class="img-fluid rounded-circle img-thumbmail" width="200">
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
 