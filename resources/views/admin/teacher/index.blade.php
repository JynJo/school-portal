
@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Teacher Management')
{{-- Content body: main page content --}}

@section('content_body')
<div class="container p-2">
    <div class="card">
        
        <div class="card-header">
            <a class='btn btn-primary' href='{{ route('admin.teacher.create') }}'><i class='fa fa-plus'></i> Add new teacher</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Advisory</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>NULL</td>
                            <td>
                                <button class='btn btn-success'><i class='fas fa-pen'></i></button>
                                <button class='btn btn-danger'><i class='fas fa-trash'></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
