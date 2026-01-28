@extends('layouts.management')

@section('content')
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">User Registration Form</h3>

                        </div>
                        <div class="block-content">
                            <form action="{{ route('users.store') }}" method="post" >
@csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Name</label>
                                                <input type="text" class="form-control form-control-sm" id="mega-firstname" name="name" placeholder="Enter your fullname..">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-email">Email</label>
                                                <input type="email" class="form-control form-control-sm" id="mega-email" name="email" placeholder="Enter your email..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-roles">Roles</label>
                                                <select class="js-select2 form-control form-control-sm" id="example-select2" name="roles[]" style="width: 100%;" data-placeholder="Choose .." multiple>
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-primary pull-right">
                                            <i class="fa fa-save mr-5"></i> Create
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

@endsection
