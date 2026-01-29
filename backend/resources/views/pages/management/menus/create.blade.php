@extends('layouts.management')

@section('content')
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Menu Registration Form</h3>

                        </div>
                        <div class="block-content">
                            <form action="{{ route('menus.store') }}" method="post" >
@csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Name EN</label>
                                                <input type="text" class="form-control form-control-sm" id="mega-firstname" name="name_en" placeholder="English Name">
                                            </div>
                                        </div>
                                    </div>
                                       <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Name SW</label>
                                                <input type="text" class="form-control form-control-sm" id="mega-firstname" name="name_sw" placeholder="Swahili Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Menu Path</label>
                                                <input type="text" class="form-control form-control-sm" id="mega-firstname" name="menu_path" placeholder="Eg. /news">
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
