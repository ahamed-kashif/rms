@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8">
            @include('project.inc.overview')
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            @include('project.inc.advance')
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title mb-4">Contractors</h4>
                        </div>
                        <div class="col-2">
                            <a href="{{route('project.contractors.view',$project->id)}}" class="ml-auto btn btn-sm btn-secondary rounded-circle" title="Add contractor"><i class="fas fa-user-plus font-size-10"></i></a>
                        </div>
                    </div>
                    @include('project.inc.contact',['contacts' => $project->contractors()->get()])
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title mb-4">Suppliers</h4>
                        </div>
                        <div class="col-2">
                            <a href="{{route('project.suppliers.view',$project->id)}}" class="ml-auto btn btn-sm btn-secondary rounded-circle" title="Add Supplier"><i class="fas fa-user-plus font-size-10"></i></a>
                        </div>
                    </div>
                    @include('project.inc.contact',['contacts' => $project->suppliers()->get()])
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title mb-4">Engineers</h4>
                        </div>
                        <div class="col-2">
                            <a href="{{route('project.engineers.view',$project->id)}}" class="ml-auto btn btn-sm btn-secondary rounded-circle" title="Add Supplier"><i class="fas fa-user-plus font-size-10"></i></a>
                        </div>
                    </div>
                    @include('project.inc.contact',['contacts' => $project->engineers()->get()])
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
