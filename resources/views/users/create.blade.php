@extends('layouts.admin-lte')

@section('title', 'Create')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create User
                <small>new system user</small>
            </h1>
            {{ Breadcrumbs::render('users.create') }}
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-5">
                    <h3>Create</h3>
                </div>
                <div class="col-md-7 page-action text-right">
                    <a href="{{ route('users.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                {!! Form::open(['route' => ['users.store'] ]) !!}
                @include('users._form')
                <!-- Submit Form Button -->
                    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection