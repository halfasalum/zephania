@extends('layouts.management')

@section('content')
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Welcome Note Management Form</h3>

                        </div>
                        <div class="block-content">
                            <form action="{{ route('welcome-note.store') }}" method="post" enctype="multipart/form-data" >
@csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Title (English)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$welcomeNote->title_en ?? ''}}" id="mega-firstname" name="title_en" placeholder="English title">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Title (Swahili)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$welcomeNote->title_sw ?? ''}}" id="mega-lastname" name="title_sw" placeholder="Swahii title">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-4">
                                       <div class="form-group row">
                                            <label class="col-12"> Image</label>
                                            <div class="col-12">
                                                <label class="custom-file custom-file-sm">
                                                    <input type="file" class="custom-file-input custom-file-input-sm" id="image" name="image">
                                                    <span class="custom-file-control custom-file-control-sm"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-email">Content (English)</label>
                                                <textarea class="form-control form-control-sm js-simplemde" name="content_en" placeholder="English content">{{$welcomeNote->content_en ?? ''}}</textarea>
                                            </div>
                                        </div>
                                    </div>
<div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-email">Content (Swahili)</label>
                                                <textarea class="form-control form-control-sm js-simplemde"  name="content_sw" placeholder="Swahili content">{{$welcomeNote->content_sw ?? ''}}</textarea>
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
