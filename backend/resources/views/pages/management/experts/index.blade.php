@extends('layouts.management')
@section('content')
<div class="row invisible" data-toggle="appear">
 <!-- Row #1 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-grid fa-2x text-primary-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="{{ $experts->count() }}">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">All Experts</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-check fa-2x text-success"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-success" data-toggle="countTo" data-speed="1000" data-to="{{ $activeExperts }}">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Active Experts</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-ban fa-2x text-danger"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-danger" data-toggle="countTo" data-speed="1000" data-to="{{ $inactiveExperts }}">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Inactive Experts</div>
                                </div>
                            </a>
                        </div>
</div>
<!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Experts   </h3>
<div class="block-options">
<a href="{{ route('experts.create') }}">
                                        <button type="button" class="btn btn-sm btn-secondary">Create Expert <i class="fa fa-plus-circle"></i></button>
</a>
                                    </div>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th class="d-none d-sm-table-cell" >Status</th>
                                        <th class="text-center" ></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($experts as $index => $expert)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="font-w600">{{ $expert->name }}</td>
                                        <td class="font-w600">{{ $expert->designation }}</td>
                                       <td class="d-none d-sm-table-cell">
                                            @if($expert->status == 'active')
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" id="btnGroupDrop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <a class="dropdown-item" href="{{ route('expert.edit', $expert->id) }}">
                                                            Edit
                                                        </a>
                                                      @if($expert->status == 'inactive')
                                                        <form action="{{ route('menus.activate', $expert->id) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="dropdown-item bg-success text-white">
                                                                Activate
                                                            </button>
                                                        </form>
                                                    @endif

                                                    @if($expert->status == 'active')
                                                        <form action="{{ route('menus.deactivate', $expert->id) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="dropdown-item bg-danger text-white">
                                                                De-activate
                                                            </button>
                                                        </form>
                                                    @endif

                                                    </div>
                                                </div>
                                        </td>
                                    </tr>
@endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->
@endsection
