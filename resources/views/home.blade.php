@extends('layouts.sidebar')

@section('content')
        <h4>Welcome {{ Auth::user()->firstname }}!</h4>
@endsection
