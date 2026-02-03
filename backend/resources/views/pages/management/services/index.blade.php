@extends('layouts.management')
@section('content')
<div class="row invisible" data-toggle="appear">
 <!-- Row #1 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-users fa-2x text-primary-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="{{ $services->count() }}">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">All Service</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-check fa-2x text-success"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-success" data-toggle="countTo" data-speed="1000" data-to="{{ $activeServices }}">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Active Service</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-ban fa-2x text-danger"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-danger" data-toggle="countTo" data-speed="1000" data-to="{{ $inactiveServices }}">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Inactive Service</div>
                                </div>
                            </a>
                        </div>
</div>
<!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Services  </h3>
<div class="block-options">
<a href="{{ route('services.create') }}">
                                        <button type="button" class="btn btn-sm btn-secondary">Create Service <i class="fa fa-user-plus"></i></button>
</a>
                                    </div>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Header</th>
                                        <th class="d-none d-sm-table-cell">Sub-header</th>
                                        <th class="d-none d-sm-table-cell" >Icon</th>
                                        <th class="d-none d-sm-table-cell" >Status</th>
                                        <th class="text-center" ></th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach($services as $index => $service)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="font-w600">{{ $service->header_en }}</td>
                                        <td class="d-none d-sm-table-cell">{{ $service->sub_header_en }}</td>
                                        <td class="d-none d-sm-table-cell">
                                            {{ $service->icon }}
                                        </td>

                                        <td class="d-none d-sm-table-cell">
                                            @if($service->is_active)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" id="btnGroupDrop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <a class="dropdown-item" href="{{ route('services.edit', $service->id) }}">
                                                            Edit
                                                        </a>
                                                      @if(!$service->is_active)
                                                        <form action="{{ route('services.activate', $service->id) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="dropdown-item bg-success text-white">
                                                                Activate
                                                            </button>
                                                        </form>
                                                    @endif

                                                    @if($service->is_active)
                                                        <form action="{{ route('services.deactivate', $service->id) }}" method="POST">
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
