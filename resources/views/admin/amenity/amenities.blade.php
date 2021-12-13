@extends('admin.admin_master')

@section('admin')    
    <form action="{{route('amenity.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Title">
        <input type="file" class="upload"  name='icon'>
        <input type="submit" value="Save">
    </form>
@endsection