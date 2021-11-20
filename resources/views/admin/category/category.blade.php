@extends('admin.admin_master')

@section('admin')    
    <form action="{{route('category.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="file" class="upload"  name='image'>
        <input type="submit" value="Save">
    </form>
@endsection