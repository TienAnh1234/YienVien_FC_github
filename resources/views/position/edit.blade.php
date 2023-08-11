@extends('layouts.app')
@section('title','edit_position')
@section('main')


<div class="container">

    <form action="/position/{{$position->id}}" method="post">
        @csrf
        @method ('PUT')
    <div class="form-group">
        <label for="enterName">Name</label>
        <input type="text" class="form-control" id="enterName" value="{{$position->name}}" name="name"><br>
    </div>

    <div class="form-group">
        <label for="enterAbbreviations">Abbreviations</label>
        <input type="text" class="form-control" id="enterAbbreviations" value="{{$position->abbreviations}}" name="abbreviations"><br>
    </div>

    <div class="form-group">
        <label for="enterDescription">Description</label>
        <textarea class="form-control" rows="5" id="enterDescription" name="description">{{$position->description}}</textarea><br>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Update">
    </form>

</div>

@endsection

