@extends('admin.admin_master')

@section('admin')    

<!-- counter_area -->
<section class="counter_area">
    <div class="row">
        @foreach ($categories as $category)
            
            <div class="col-lg-3 col-sm-6">
                <div class="counter">
                    <div class="cat__image" style="width:100%;height:150px;background: url({{asset('storage/'.$category->image)}});background-size:cover; background-position:center">
                    </div>                
                    <h1>{{$category->title}}</h1>

                    <form action="{{ route('category.destroy',$category->id) }}" method="post">    
                    <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!--/ counter_area -->

@endsection