@extends('layout.main')
@section('body_right')
    <h1>
        {{$studentName}} - {{$studentID}}
    </h1>
    <select>

        @foreach($educationLavel as $key=>$value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
@endsection
@section('body_left')
    <h1>Test SHow</h1>
@endsection
