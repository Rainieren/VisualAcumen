@extends('layouts.sidebar')

@section('content')
    <div class="create-project-overlay shadow data-form-slideout-project">
        <a href="#" class="close-create-project form-slidein" data-form-slidein="project" ><i class="fas fa-arrow-left"></i></a>
        <div class="create-project-container">
            <div class="project-illustration-block p-2">

            </div>
            <div class="create-project-block p-2">
                <h3>Create Project</h3>
                <form method="POST" action="{{ route('create_project') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name*</label>
                        <input type="text" id="name" name="name" placeholder="Project name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Short description</label>
                        <textarea name="description" class="form-control" placeholder="Description" id="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Type of project</label>
                        <select name="type" id="type" class="form-control">
                            <option selected>Choose...</option>
                            @foreach($projecttypes as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="client">Assign client <small>Optional</small></label>--}}
{{--                        <select id="client" class="form-control">--}}
{{--                            <option selected>Choose...</option>--}}
{{--                            <option>Siemens</option>--}}
{{--                            <option>Philips</option>--}}
{{--                            <option>Samsung</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label for="select-user">Select users</label>
                        <div class="form-row" id="select-user">
                            @foreach($users as $user)
                                <div class="col-auto mb-3">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" name="users[]" class="custom-control-input" value="{{ $user->id }}" id="{{ $user->id }}">
                                        <label class="custom-control-label" for="{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="project_extras mt-4">
                        <a href="#collapseExample" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Optional <i class="fal fa-angle-right"></i>
                        </a>
                        <hr>
                        <div class="collapse" id="collapseExample">
                            <div class="form-group">
                                <label>Project card color</label>
                                <div class="form-row align-items-center">
{{--                                    <div class="col-auto my-1">--}}
{{--                                        <div class="custom-control custom-checkbox mr-sm-2">--}}
{{--                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing" checked>--}}
{{--                                            <label class="custom-control-label" for="customControlAutosizing">Use default color</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-auto my-1">
                                        <input type="text" name="color" class="form-control" placeholder="#F9F9F9">
                                    </div>

                                </div>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label>Show costs on card</label>--}}
{{--                                <div class="custom-control custom-checkbox mr-sm-2">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">--}}
{{--                                    <label class="custom-control-label" for="customControlAutosizing1">Enabled</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Show amount of employees on project</label>--}}
{{--                                <div class="custom-control custom-checkbox mr-sm-2">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing2" checked>--}}
{{--                                    <label class="custom-control-label" for="customControlAutosizing2">Enabled</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>


                    <div class="project-submit">
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-primary">Create project</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="content-header mb-4">
        <div class="row">
            <div class="col-md-6">
                <h4>All Projects</h4>
            </div>
            <div class="col-md-6 text-right">
                <a href="#" id="create-project" class="form-slideout btn btn-primary" data-form-slideout="project">New project</a>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <h5>Recent projects</h5>
        </div>
        @if(count($recent))
            @foreach($recent as $recentProject)
                <div class="col-md-3 d-flex">
                    <div class="card mb-4 w-100">
                        <a href="{{ route('showProject', $recentProject->code) }}">
                            <div class="card-body" style="background-color: {{ $recentProject->color }}; color: white;">
                                <div class="row">
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-10">
                                        <h6 class="m-0">{{ $recentProject->name }}</h6>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="card-footer">
                            <small>People: </small>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-md-12">
                <h5>You have no projects</h5>
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-md-12 mb-4">
            <h5>All projects</h5>
        </div>
        <div class="col-md-12">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col"><i class="fas fa-star"></i></th>
                    <th scope="col">Name</th>
                    <th scope="col">Code</th>
                    <th scope="col">Type</th>
                    <th scope="col">Users</th>
                    <th scope="col">Responsible</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($projects->sortByDesc('created_at') as $project)
                        <tr>
                            <td></td>
                            <td><a href="">{{ $project->name }}</a></td>
                            <td>{{ $project->code }}</td>
                            <td>{{ $project->projecttype->name }}</td>
                            <td>{{ count($project->users) }}</td>
                            <td>{{ $project->responsible_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
