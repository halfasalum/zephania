@extends('layouts.management')

@section('content')
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Expert Registration Form</h3>

                        </div>
                        <div class="block-content">
                            <form action="{{ route('experts.store') }}" method="post" enctype="multipart/form-data"  >
@csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Name </label>
                                                <input type="text" class="form-control form-control-sm" id="mega-firstname" name="name" placeholder=" Name">
                                            </div>
                                        </div>
                                    </div>
                                       <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Designation </label>
                                                <input type="text" class="form-control form-control-sm" id="mega-firstname" name="designation" placeholder=" Designation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                 <label for="mega-firstname">Image </label>
                                                <input type="file" class="form-control form-control-sm" id="mega-firstname" name="image" placeholder=" Designation">
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
