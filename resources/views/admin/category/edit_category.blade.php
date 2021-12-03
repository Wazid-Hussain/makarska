@extends('admin.admin_master')

@section('admin')    
    <form action="{{route('category.update', $category->id)}}" method="post"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="Title" value="{{$category->title}}">
        <div class="add-list-media-wrap">
            <div class="fuzone" style="background-image:url('{{asset('storage/'.$category->image)}}'); background-position:center;
                background-size:cover;">
                <div class="fu-text">
                <span><i class="fa fa-picture-o"></i> Click
                    here or drop files to upload</span>
                <div class="photoUpload-files fl-wrap"></div>
                </div>
                <input type="file" class="upload" name="image">
            </div>
        </div>
        <input type="submit" value="Save">
    </form>
@endsection