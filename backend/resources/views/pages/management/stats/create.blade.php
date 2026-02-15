@extends('layouts.management')

@section('content')
<div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Page Stats Management Form</h3>

                        </div>
                        <div class="block-content">
                            <form action="{{ route('stats.store') }}" method="post" enctype="multipart/form-data" >
@csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-firstname">Project Done</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$stats->project_done ?? ''}}" id="mega-firstname" name="project_done" placeholder="Eg. 10">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Happy Clients</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$stats->happy_clients ?? ''}}" id="mega-lastname" name="happy_clients" placeholder="Eg. 10 ">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Experts Staff</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$stats->expert_staff ?? ''}}" id="mega-lastname" name="expert_staff" placeholder="Eg. 10">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-lastname">Win Awards</label>
                                                <input type="text" class="form-control form-control-sm" value="{{$stats->win_awards ?? ''}}" id="mega-lastname" name="win_awards" placeholder="Eg. 10">
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
