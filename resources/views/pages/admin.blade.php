@push('style')
    <link rel="stylesheet" href="{{asset('css/admin/Admin.css')}}">
@endpush

@extends('layout.layout')

@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="container formContainer">
        <form>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email address</label>
                <input type="email" id="form2Example1" class="form-control" />
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" id="form2Example2" class="form-control" />
            </div>
          
            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
          </form>
    </div>
</div>
@endsection



@push('scripts')
<script src="{{asset('/js/admin/admin.js')}}"></script>
@endpush
