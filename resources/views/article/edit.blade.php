@extends('layouts.app');

@section('content')
    <label for="">title</label>
    <input type="text" name="title" id="">

    <label for="">description</label>
    <input type="text" name="description" id="">

    <label for="">category</label>
    <select name="category_id" id="">
        @foreach ($categories as $category)
             <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
     
    </select>
@endsection