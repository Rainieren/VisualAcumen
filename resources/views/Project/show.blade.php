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
{{--                    <div class="form-group">--}}
{{--                        <label for="client">Assign client <small>Optional</small></label>--}}
{{--                        <select id="client" class="form-control">--}}
{{--                            <option selected>Choose...</option>--}}
{{--                            <option>Siemens</option>--}}
{{--                            <option>Philips</option>--}}
{{--                            <option>Samsung</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="employees">Assign employees <small>Optional</small></label>--}}
{{--                        <select id="employees" class="form-control">--}}
{{--                            <option selected>Choose...</option>--}}
{{--                            <option>Richard</option>--}}
{{--                            <option>Mark</option>--}}
{{--                            <option>Manuel </option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
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

    <div class="row">
        @foreach($recent as $recentProject)
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body" style="background-color: {{ $recentProject->color }}; color: white;">
                        <h5>{{ $recentProject->name }}</h5>
                        <small>{{ $recentProject->created_at }}</small>
                    </div>
                    <div class="card-footer">
                        <p>People: {{ count($recentProject->users) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12">
            @foreach($projects as $project)
                <p>{{ $project->name }}</p>
            @endforeach
        </div>

    </div>

@endsection
