@extends('layouts.sidebar')

@section('content')
        <h4>Welcome {{ Auth::user()->firstname }}!</h4>
        <p>{{ Auth::user()->firstname }} is {{ Auth::user()->job->name }} van {{ Auth::user()->company->name }}</p>


        <h5>{{ Auth::user()->company->name }} heeft {{ count(Auth::user()->company->projects) }} Projecten:</h5>

        <ul class="">
        @foreach(Auth::user()->company->projects as $project)
            <li>Project naam: <b>{{ $project->name }}</b></li>

            <h6>Users die aan dit project werken: </h6>
            <ul class="">
                @foreach($project->users as $user)
                    <li>{{ $user->firstname }}</li>
                    <li>{{ $user->firstname }} heeft daarnaast nog {{ count($user->projects) }} andere projecten</li>
                    <ul>
                        @foreach($user->projects as $userProject)
                            <li>{{ $userProject->name }}</li>
                            <li>Binnen dit project werken dan weer</li>
                            <ul>
                                @foreach($userProject->users as $userProjectUsers)
                                    <li>{{ $userProjectUsers->firstname }}</li>
                                @endforeach
                            </ul>
                        @endforeach
                    </ul>
                @endforeach
            </ul>
        @endforeach
        </ul>


@endsection
