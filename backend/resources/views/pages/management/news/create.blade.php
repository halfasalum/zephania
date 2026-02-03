@extends('layouts.management')

@section('content')
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">News Registration Form</h3>

                        </div>
                        <div class="block-content">
                            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data" >
@csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="title-en">Title (EN)</label>
                                                <input type="text" class="form-control form-control-sm" id="title-en" name="title_en" placeholder="Enter your title (EN)..">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="title-sw">Title (SW)</label>
                                                <input type="text" class="form-control form-control-sm" id="title-sw" name="title_sw" placeholder="Enter your title in Swahili..">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="feature_image">Feature Image</label>
                                                <input type="file" class="form-file-control form-file-control-sm" id="feature_image" name="feature_image" placeholder="Enter your feature image..">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="date">Date</label>
                                                <input type="date" class="form-control form-control-sm" id="date" name="date" placeholder="Enter your date..">
                                            </div>
                                        </div>
                                    </div>

                                        <div class="col-md-6">
                                        <div class="form-group row">
                                             <div class="col-12">
                                                <label for="mega-email">Content (English)</label>
                                                <textarea class="form-control form-control-sm js-simplemde" name="content_en" placeholder="English content"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                        <div class="form-group row">
                                             <div class="col-12">
                                                <label for="mega-email">Content (Swahili)</label>
                                                <textarea class="form-control form-control-sm js-simplemde" name="content_sw" placeholder="Swahili content"></textarea>
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
