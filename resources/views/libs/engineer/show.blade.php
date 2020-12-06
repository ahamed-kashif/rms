@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="row">
        <h3 class="card-title">
            {{$engineer->name}}
            <span class="badge {{$engineer->is_active ? 'badge-success' : 'badge-secondary'}}">
                        {{$engineer->is_active ? 'active' : 'inactive'}}
            </span>

        </h3>
        <div class="ml-auto">
            <div>
                <div class="btn-group mb-3" role="group">
                    <form action="{{route('engineer.destroy',$engineer->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-outline-primary w-xs" href="{{route('engineer.edit',$engineer->id)}}">
                            <i class="fa fa-edit"></i>
                            <span class="text-alias"> Edit</span></a>
                        <button class="btn btn-danger w-xs" type="submit" onclick="return confirm('Are you sure you want to Delete?')">
                            <i class="fas fa-trash-alt"></i>
                            <span class="text-alias"> Delete</span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-5 col-lg-5">
            <ol class="list-unstyled">
                <li>
                    <b>Contact Number</b><p><a href="tel:{{$engineer->phone_number}}">{{$engineer->phone_number}}</a></p>
                </li>
                <li>
                    <b>Email Address</b><p><a href="email:{{$engineer->email}}">{{$engineer->email}}</a></p>
                </li>
                <li>
                    <b>National ID (NID)</b><p>{{$engineer->nid}}</p>
                </li>
                <li>
                    <b>Address</b><p>{{$engineer->address}}</p>
                </li>
            </ol>
        </div>
        <div class="col-md-7 col-lg-7 border-pink">
            <div class="align-content-end">
                <h5>Assigned Projects</h5>
                @if($engineer->projects()->count() >= 1)
                    <table class="table table-bordered align-content-center">
                        <thead>
                        <tr>
                            <th class="title">Project Status</th>
                            <th>Project</th>
{{--                            <th>Specialized At</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($engineer->projects()->get() as $project)
                            <tr>
                                <td>@include('project.inc.status')</td>
                                <td>{{$project->name}}</td>
{{--                                <td>{{$project->pivot->purpose}}</td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <h6>No projects assigned!</h6>
                @endif
        </div>
    </div>
@endsection

