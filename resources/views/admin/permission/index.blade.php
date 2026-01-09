<!-- Extends main layout form layout folder -->
@extends('layout.main')
<!-- Addind Dynamic layout -->
@section('title', 'Permissions')
<!-- Main Content -->
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Permissions
            <small>Set Permissions for roles</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Select Roles</h3>
                        <div>
                            <select class="form-control " style="width: 300px;" id="roleSelect">
                                <option value="">-- Select Role --</option>
                                @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ ucwords($role->type) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class='box-body' id="permissionBox">
                        <!-- Permissions will be loaded here via AJAX -->
                        <form method="POST" action="{{ route('role.permissions.update') }}">
                            @csrf

                            <input type="hidden" name="role_id" id="role_id">

                            <div class="box-body">
                                @foreach ($permissions as $module => $modulePermissions)
                                <div class="box box-default">
                                    <div class="box-header with-border">

                                        {{-- MODULE SELECT ALL --}}
                                        <label>
                                            <input type="checkbox"
                                                class="module-checkbox"
                                                data-module="{{ $module }}">
                                            <strong>{{ ucwords(str_replace('_',' ', $module)) }}</strong>
                                        </label>
                                    </div>

                                    <div class="box-body">
                                        <div class="row">

                                            @foreach ($modulePermissions as $permission)
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox"
                                                        name="permissions[]"
                                                        value="{{ $permission->id }}"
                                                        class="permission-checkbox"
                                                        data-module="{{ $module }}">
                                                    {{ $permission->name }}
                                                </label>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">
                                    Save Permissions
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')

@endsection