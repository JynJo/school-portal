@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Create Teacher')
{{-- Content body: main page content --}}

@section('content_body')
<div class="container p-2">
    <div class="card">
        
        <div class="card-header">
            <h6>Please fill up the form.</h6>
        </div>

        <div class="card-body">
            <form action='{{ route('admin.teacher.store') }}' method="POST">
                @csrf 
                <div class='form-group'>
                    <label for='name'>Name</label>
                    <input class="form-control" name='name' id='name' placeholder="Enter Name">
                    @error('name')
                        {{ $message }}     
                    @enderror
                </div>

                <div class="form-group">
                    <label for='email'>Email Address</label>
                    <input class="form-control" type='email' name='email' id='email' placeholder="Enter Email">
                    @error('email')
                        {{ $message }}     
                    @enderror
                </div>

                <div class="form-group">
                    <label for='password'>Account Password</label>
                    <input class="form-control" type='password' name='password' id='password' placeholder="Enter Password">
                    @error('password')
                        {{ $message }}     
                    @enderror
                </div>

                <div class="form-group">
                    <label for='password_confirmation'>Confirm Password</label>
                    <input class="form-control" type='password' name='password_confirmation' id='password_confirmation' placeholder="">
                </div>

                <button type='submit' class='btn btn-success'>Submit</button>


            </form>
        </div>
    </div> 


</div>
@stop



{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush
