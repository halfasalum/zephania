@extends('layouts.management')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Edit User</h3>
    </div>

    <div class="block-content">
        <form action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row">
                {{-- Name --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input
                            type="text"
                            class="form-control form-control-sm"
                            id="name"
                            name="name"
                            value="{{ old('name', $user->name) }}"
                        >
                    </div>
                </div>

                {{-- Email --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            class="form-control form-control-sm"
                            id="email"
                            name="email"
                            value="{{ old('email', $user->email) }}"
                        >
                    </div>
                </div>

                {{-- Roles --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="roles">Roles</label>
                        <select
                            class="js-select2 form-control form-control-sm"
                            name="roles[]"
                            multiple
                            style="width: 100%;"
                            data-placeholder="Choose roles"
                        >
                            @foreach ($roles as $role)
                                <option
                                    value="{{ $role->name }}"
                                    {{ in_array($role->name, old('roles', $user->roles ?? [])) ? 'selected' : '' }}
                                >
                                    {{ $role->name }}
                                </option>
                            @endforeach
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
