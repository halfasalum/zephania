@extends('layouts.management')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Edit Expert</h3>
    </div>


    <div class="block-content">
        <form action="{{ route('expert.update', $expert->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row">
                {{-- Name --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Name (English)</label>
                        <input
                            type="text"
                            class="form-control form-control-sm"
                            id="name_en"
                            name="name"
                            value="{{ old('name_en', $expert->name) }}"
                        >
                    </div>
                </div>

                {{-- Name (Arabic) --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name_sw">Name (Swahili)</label>
                        <input
                            type="text"
                            class="form-control form-control-sm"
                            id="name_sw"
                            name="designation"
                            value="{{ old('name_sw', $expert->designation) }}"
                        >
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

            {{-- Submit --}}
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
