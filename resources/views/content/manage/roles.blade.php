@extends('layouts/layoutMaster')

@section('title', 'Account settings - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />

<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>

<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>

<script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-access-roles.js')}}"></script>
<script src="{{asset('assets/js/modal-add-role.js')}}"></script>
@endsection


@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light"> Manage /</span> Roles
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-4">
    <li class="nav-item"><a class="nav-link active" href="{{url('roles')}}"><i class="ti-xs ti ti-users me-1"></i> Roles</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('permission')}}"><i class="ti-xs ti ti-bell me-1"></i> Permission</a></li>
    </ul>
    <div class="card">

<h4 class="mb-6">Roles List</h4>

<p class="mb-6">A role provided access to predefined menus and features so that depending on <br> assigned role an administrator can have access to what user needs.</p>
<!-- Role cards -->
<div class="row g-4">
  <div class="col-xl-4 col-lg-5 col-md-5">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h6 class="fw-normal mb-2">Total 5 users</h6>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kaith D'souza" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="John Doe" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar">
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-1">
          <div class="role-heading">
            <h4 class="mb-1">Admin</h4>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><span>Edit Role</span></a>
          </div>
          <a href="javascript:void(0);" class="text-muted"><i class="ti ti-copy ti-md"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h6 class="fw-normal mb-2">Total 30 users</h6>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Andrew Tye" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Rishi Swaat" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{ asset('assets/img/avatars/9.png') }}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Rossie Kim" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Merchent" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{ asset('assets/img/avatars/10.png') }}" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Sam D'souza" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{ asset('assets/img/avatars/13.png') }}" alt="Avatar">
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-1">
          <div class="role-heading">
            <h4 class="mb-1">Users</h4>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><span>Edit Role</span></a>
          </div>
          <a href="javascript:void(0);" class="text-muted"><i class="ti ti-copy ti-md"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
        </div>


        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card-body text-sm-end text-center ps-sm-0">
            <button data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-primary mb-2 text-nowrap add-new-role">Add New Role</button>
            <p class="mb-0 mt-1">Add role, if it does not exist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <!-- Role Table -->
    <div class="card">
      <div class="card-datatable table-responsive">
        <table class="datatables-users table border-top">
          <thead>
            <tr>
              <th>User</th>
              <th>Role</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!--/ Role Table -->
  </div>
</div>
<!--/ Role cards -->

<!-- Add Role Modal -->
@include('_partials/_modals/modal-add-role')
<!-- / Add Role Modal -->

    </div>
  </div>
</div>

@endsection
