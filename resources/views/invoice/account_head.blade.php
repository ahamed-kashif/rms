@extends('layouts.invoice')
@section('invoice-css')
    @include('extras.select2-css')
@endsection
@section('title')
    INVOICE {{$invoice->invoice_no}}
@endsection
@section('subtitle')
    Account Head
@endsection
@section('content')
    <div class="p-5">
        <form action="{{route('invoice.account-head.update')}}" method="post" id="project_form">
            @csrf
            <button type="button" onclick="show_projects()" class="btn btn-outline-dark btn-lg btn-block waves-effect waves-light mb-1">Project</button>
            <div class="form-group yo">
               <label for="project_id" class="control-label">Select a Project...</label>
                <select class="form-control select2" name="project_id" id="project_id">
                    <option>......</option>
                    @foreach($projects as $project)
                        <option value="{{$project->id}}">{{$project->name}}</option>
                    @endforeach
                </select>
            </div>
        </form>
        <form action="{{route('invoice.account-head.update')}}" method="post" id="other_form">
            @csrf
{{--            <input type="hidden" name="is_project" value="0" />--}}
            <button type="button" id="other_project" onclick="show_other_projects()" class="btn btn-outline-dark btn-lg btn-block waves-effect waves-light mb-1">Investor Projects</button>
            <div class="form-group yo_other">
                <label for="project_id" class="control-label">Select an Investor Project...</label>
                <select class="form-control select2" name="project_id" id="other_project_id">
                    <option>......</option>
                    @foreach($otherProjects as $project)
                        <option value="{{$project->id}}">{{$project->name}}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
@endsection
@section('footer')
    Select Account Head
@endsection
@section('invoice-js')
    @include('extras.select2-js')
    @include('extras.advance-form-js')
    <script>
        let toggle = false;
        $(document).ready(function () {
           $('.yo').hide();
           $('.yo_other').hide();
           let projectForm = $('#project_form');
           let otherForm = $('#other_form');
           $('#project_id').on('change', function () {
                projectForm.submit();
           })
            $('#other_project_id').on('change', function(){
                otherForm.submit();
            })
        })
        function  show_projects() {
            $('.yo').show();
            $('#other_form').hide();
        }
        function show_other_projects(){
            $('.yo_other').show();
            $('#project_form').hide();
        }
    </script>
@endsection
