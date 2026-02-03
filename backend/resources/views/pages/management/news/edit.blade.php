@extends('layouts.management')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Edit News</h3>
    </div>
    <div class="block-content">
        <form action="{{ route('news.update', $news->id) }}" method="post" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="title-en">Title (EN)</label>
                            <input type="text" class="form-control form-control-sm" id="title-en" name="title_en" value="{{ old('title_en', $news->title_en) }}" placeholder="Enter your title (EN)..">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="title-sw">Title (SW)</label>
                            <input type="text" class="form-control form-control-sm" id="title-sw" name="title_sw" value="{{ old('title_sw', $news->title_sw) }}" placeholder="Enter your title in Swahili..">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="feature_image">Feature Image</label>
                            @if($news->image)
                                <div class="mb-2">
                                    <img src="{{ asset('uploads/news/'.$news->image) }}" alt="Feature Image" width="120" class="img-thumbnail">
                                </div>
                            @endif
                            <input type="file" class="form-file-control form-file-control-sm" id="feature_image" name="feature_image">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="date">Date</label>
                            <input type="date" class="form-control form-control-sm" id="date" name="date" value="{{ old('date', $news->news_date->format('Y-m-d')) }}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="content_en">Content (English)</label>
                            <textarea class="form-control form-control-sm js-simplemde" name="content_en" placeholder="English content">{{ old('content_en', $news->content_en) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="content_sw">Content (Swahili)</label>
                            <textarea class="form-control form-control-sm js-simplemde" name="content_sw" placeholder="Swahili content">{{ old('content_sw', $news->content_sw) }}</textarea>
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-12">
                    <button type="submit" class="btn btn-alt-primary pull-right">
                        <i class="fa fa-save mr-5"></i> Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
