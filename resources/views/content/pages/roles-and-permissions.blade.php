@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Roles and Permission')

@section('page-style')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Roles and Permissions!') }}
                    <br>
                    <br>


                    @canany(['create-role', 'edit-role', 'delete-role'])
                        <a class="btn btn-primary" href="{{ route('roles.index') }}">
                            <i class="bi bi-person-fill-gear"></i> Manage Roles</a>
                    @endcanany
                    @canany(['create-user', 'edit-user', 'delete-user'])
                        <a class="btn btn-success" href="{{ route('users.index') }}">
                            <i class="bi bi-people"></i> Manage Users</a>
                    @endcanany
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection