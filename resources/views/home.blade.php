@extends('layouts.sidebar')

@section('content')
        <h4>Welcome {{ Auth::user()->firstname }}!</h4>
        <p>{{ Auth::user()->firstname }} is {{ Auth::user()->job->name }} van <span class="text-blue font-weight-bold">{{ Auth::user()->company->name }}</span></p>

        <h5>De mensen in dit bedrijf zijn</h5>
        <ul>
            @foreach(Auth::user()->company->users as $user)
                <li>{{ $user->firstname }}, <i>{{ $user->job->name != null ? $user->job->name : "Niks" }}</i> binnen <span class="text-blue font-weight-bold">{{ $user->company->name }}</span></li>
            @endforeach
        </ul>



        <h5>{{ Auth::user()->company->name }} heeft {{  count(Auth::user()->company->projects) }} Projecten:</h5>

        <ul class="">
        @foreach(Auth::user()->company->projects as $project)
            <li>Project naam: <b>{{ $project->name }}</b></li>

            <h6>Users die aan dit project werken: </h6>
            <ul class="">
                @foreach($project->users as $user)
                    <li>{{ $user->firstname }}, <i>{{ $user->job->name != null ? $user->job->name : "Niks" }}</i> binnen <span class="text-blue font-weight-bold">{{ $user->company->name != null ? $user->company->name : "Niks" }}</span></li>
                    <li>{{ $user->firstname }} heeft daarnaast nog {{ count($user->projects) }} andere projecten</li>
                    <ul>
                        @foreach($user->projects as $userProject)
                            <li><b>{{ $userProject->name }}</b></li>
                            <li>Binnen dit project werken dan weer</li>
                            <ul>
                                @foreach($userProject->users as $userProjectUsers)
                                    <li>{{ $userProjectUsers->firstname }} is <i>{{ $userProjectUsers->job->name != null ? $userProjectUsers->job->name : "Niks" }}</i> binnen <span class="text-blue font-weight-bold">{{ $userProjectUsers->company->name != null ? $userProjectUsers->company->name : "Niks" }}</span></li>
                                @endforeach
                            </ul>
                        @endforeach
                    </ul>
                @endforeach
            </ul>
        @endforeach
        </ul>


@endsection
