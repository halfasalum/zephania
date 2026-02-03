@extends('layouts.management')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Edit Service</h3>
    </div>
    <div class="block-content">
        <form action="{{ route('services.update', $service->id) }}" method="post">
            @csrf
            @method('PUT') <!-- Important for update -->

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="header-en">Header (EN)</label>
                            <input type="text" class="form-control form-control-sm" id="header-en" name="header_en" value="{{ old('header_en', $service->header_en) }}" placeholder="Enter your header (EN)..">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="header-sw">Header (SW)</label>
                            <input type="text" class="form-control form-control-sm" id="header-sw" name="header_sw" value="{{ old('header_sw', $service->header_sw) }}" placeholder="Enter header in Swahili..">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="sub-header-en">Sub-Header (EN)</label>
                            <input type="text" class="form-control form-control-sm" id="sub-header-en" name="sub_header_en" value="{{ old('sub_header_en', $service->sub_header_en) }}" placeholder="Enter your sub-header (EN)..">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="sub-header-sw">Sub-Header (SW)</label>
                            <input type="text" class="form-control form-control-sm" id="sub-header-sw" name="sub_header_sw" value="{{ old('sub_header_sw', $service->sub_header_sw) }}" placeholder="Enter sub-header in Swahili..">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="description-en">Description (English)</label>
                            <textarea class="form-control form-control-sm js-simplemde" name="description_en" placeholder="English description">{{ old('description_en', $service->description_en) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="description-sw">Description (Swahili)</label>
                            <textarea class="form-control form-control-sm js-simplemde" name="description_sw" placeholder="Swahili description">{{ old('description_sw', $service->description_sw) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="icon">Icon</label>
                            <select class="js-select2 form-control form-control-sm" id="icon" name="icon" style="width: 100%;" data-placeholder="Choose ..">
                                <option></option>
                                @php
                                    $icons = [
                                        'tax-planning.svg' => 'Tax planning',
                                        'tax-2.svg' => 'Tax 2',
                                        'tax-3.svg' => 'Tax 3',
                                        'tax-4.svg' => 'Tax 4',
                                        'tax-5.svg' => 'Tax 5',
                                        'tax-6.svg' => 'Tax 6',
                                        'audit.svg' => 'Audit',
                                        'investment.svg' => 'Investment',
                                    ];
                                @endphp
                                @foreach($icons as $value => $label)
                                    <option value="{{ $value }}" {{ $service->icon === $value ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
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
