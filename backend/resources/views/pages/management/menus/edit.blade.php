@extends('layouts.management')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Edit Menu</h3>
    </div>


    <div class="block-content">
        <form action="{{ route('menus.update', $menu->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row">
                {{-- Name --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">Name (English)</label>
                        <input
                            type="text"
                            class="form-control form-control-sm"
                            id="name_en"
                            name="name_en"
                            value="{{ old('name_en', $menu->name_en) }}"
                        >
                    </div>
                </div>

                {{-- Name (Arabic) --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name_sw">Name (Swahili)</label>
                        <input
                            type="text"
                            class="form-control form-control-sm"
                            id="name_sw"
                            name="name_sw"
                            value="{{ old('name_sw', $menu->name_sw) }}"
                        >
                    </div>
                </div>

                {{-- Email --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="menu_path">Menu Path</label>
                        <input
                            type="text"
                            class="form-control form-control-sm"
                            id="menu_path"
                            name="menu_path"
                            value="{{ old('menu_path', $menu->menu_path) }}"
                        >
                    </div>
                </div>

                {{-- Roles --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="roles">Status</label>
                        <select
                            class="js-select2 form-control form-control-sm"
                            name="status"
                            style="width: 100%;"
                            data-placeholder="Choose status"
                        >
                            <option
                                value="active"
                                {{ $menu->status == 'active' ? 'selected' : '' }}
                            >
                                Active
                            </option>
                            <option
                                value="inactive"
                                {{ $menu->status == 'inactive' ? 'selected' : '' }}
                            >
                                Inactive
                            </option>
                        </select>
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
