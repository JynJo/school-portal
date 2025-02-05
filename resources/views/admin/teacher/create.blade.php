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
