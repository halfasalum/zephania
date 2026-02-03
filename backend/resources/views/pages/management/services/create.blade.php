@extends('layouts.management')

@section('content')
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Service Registration Form</h3>

                        </div>
                        <div class="block-content">
                            <form action="{{ route('users.store') }}" method="post" >
@csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="header-en">Header (EN)</label>
                                                <input type="text" class="form-control form-control-sm" id="header-en" name="header_en" placeholder="Enter your header (EN)..">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="sub-header-sw">Header (SW)</label>
                                                <input type="text" class="form-control form-control-sm" id="sub-header-sw" name="header_sw" placeholder="Enter header in Swahili..">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="sub-header-en">Sub-Header (EN)</label>
                                                <input type="text" class="form-control form-control-sm" id="sub-header-en" name="sub_header_en" placeholder="Enter your sub-header (EN)..">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="sub-header-sw">Sub-Header (SW)</label>
                                                <input type="text" class="form-control form-control-sm" id="sub-header-sw" name="sub_header_sw" placeholder="Enter sub-header in Swahili..">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                        <div class="form-group row">
                                             <div class="col-12">
                                                <label for="mega-email">Description (English)</label>
                                                <textarea class="form-control form-control-sm js-simplemde" name="description_en" placeholder="English description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                        <div class="form-group row">
                                             <div class="col-12">
                                                <label for="mega-email">Description (Swahili)</label>
                                                <textarea class="form-control form-control-sm js-simplemde" name="description_sw" placeholder="Swahili description"></textarea>
                                            </div>
                                        </div>
                                    </div>
<div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-roles">Icon</label>
                                                <select class="js-select2 form-control form-control-sm" id="example-select2" name="roles[]" style="width: 100%;" data-placeholder="Choose .." multiple>
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->

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
