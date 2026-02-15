@extends('layouts.management')

@section('content')
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Welcome Note Management Form</h3>

                        </div>
                        <div class="block-content">
                            <form action="{{ route('why.store') }}" method="post" enctype="multipart/form-data" >
@csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Header (English)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->header_en ?? ''}}" id="mega-firstname" name="header_en" placeholder="English title">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Header (Swahili)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->header_sw ?? ''}}" id="mega-lastname" name="header_sw" placeholder="Swahii title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Sub-Header (English)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->sub_header_en ?? ''}}" id="mega-firstname" name="sub_header_en" placeholder="English title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Sub-Header (Swahili)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->sub_header_sw ?? ''}}" id="mega-lastname" name="sub_header_sw" placeholder="Swahii title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Item 1 Header (English)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item1_header_en ?? ''}}" id="mega-firstname" name="item1_header_en" placeholder="English title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Item 1 Header  (Swahili)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item1_header_sw ?? ''}}" id="mega-lastname" name="item1_header_sw" placeholder="Swahii title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Item 1 Sub-Header (English)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item1_sub_header_en ?? ''}}" id="mega-firstname" name="item1_sub_header_en" placeholder="English title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Item 1 Sub-Header  (Swahili)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item1_sub_header_sw ?? ''}}" id="mega-lastname" name="item1_sub_header_sw" placeholder="Swahii title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Item 2 Header (English)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item2_header_en ?? ''}}" id="mega-firstname" name="item2_header_en" placeholder="English title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Item 2 Header  (Swahili)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item2_header_sw ?? ''}}" id="mega-lastname" name="item2_header_sw" placeholder="Swahii title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Item 2 Sub-Header (English)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item2_sub_header_en ?? ''}}" id="mega-firstname" name="item2_sub_header_en" placeholder="English title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Item 2 Sub-Header  (Swahili)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item2_sub_header_sw ?? ''}}" id="mega-lastname" name="item2_sub_header_sw" placeholder="Swahii title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Item 3 Header (English)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item3_header_en ?? ''}}" id="mega-firstname" name="item3_header_en" placeholder="English title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Item 3 Header  (Swahili)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item3_header_sw ?? ''}}" id="mega-lastname" name="item3_header_sw" placeholder="Swahii title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Item 3 Sub-Header (English)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item3_sub_header_en ?? ''}}" id="mega-firstname" name="item3_sub_header_en" placeholder="English title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Item 3 Sub-Header  (Swahili)</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$whyus->item3_sub_header_sw ?? ''}}" id="mega-lastname" name="item3_sub_header_sw" placeholder="Swahii title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group row">
                                            <label class="col-12">Front Image</label>
                                            <div class="col-12">
                                                <label class="custom-file custom-file-sm">
                                                    <input type="file" class="custom-file-input custom-file-input-sm" id="image" name="image_front">
                                                    <span class="custom-file-control custom-file-control-sm"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group row">
                                            <label class="col-12">Back Image</label>
                                            <div class="col-12">
                                                <label class="custom-file custom-file-sm">
                                                    <input type="file" class="custom-file-input custom-file-input-sm" id="image" name="image_back">
                                                    <span class="custom-file-control custom-file-control-sm"></span>
                                                </label>
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
