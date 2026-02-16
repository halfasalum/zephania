@extends('layouts.management')

@section('content')
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">General Info Management Form</h3>

                        </div>
                        <div class="block-content">
                            <form action="{{ route('general.store') }}" method="post" enctype="multipart/form-data" >
@csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Email</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$general->email ?? ''}}" id="mega-firstname" name="email" >
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Phone</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$general->phone ?? ''}}" id="mega-lastname" name="phone" >
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Working Hours</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$general->working_hours ?? ''}}" id="mega-lastname" name="working_hours" >
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Address </label>
                                                <input type="text" class="form-control form-control-sm" value="{{$general->address ?? ''}}" id="mega-lastname" name="address" >
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Facebook </label>
                                                <input type="text" class="form-control form-control-sm" value="{{$general->facebook ?? ''}}" id="mega-lastname" name="facebook" >
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">X(Twitter) </label>
                                                <input type="text" class="form-control form-control-sm" value="{{$general->twitter ?? ''}}" id="mega-lastname" name="twitter" >
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Instagram </label>
                                                <input type="text" class="form-control form-control-sm" value="{{$general->instagram ?? ''}}" id="mega-lastname" name="instagram" >
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Linkedin </label>
                                                <input type="text" class="form-control form-control-sm" value="{{$general->linkedin ?? ''}}" id="mega-lastname" name="linkedin" >
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Bio </label>
                                                <textarea type="text" class="form-control form-control-sm" id="mega-lastname" name="bio" >{{$general->bio ?? ''}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-primary pull-right">
                                            <i class="fa fa-save mr-5"></i> Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

@endsection
