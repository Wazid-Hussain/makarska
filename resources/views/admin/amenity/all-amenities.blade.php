@extends('admin.admin_master')

@section('admin')    

<!-- counter_area -->
<section class="counter_area">
    <div class="row">
        @foreach ($amenities as $amenity)
            
            <div class="col-lg-3 col-sm-6">
                <div class="counter">
                    <div class="cat__image" style="width:100%;height:150px;background: url({{asset('storage/'.$amenity->icon)}});background-size:cover; background-position:center">
                    </div>                
                    <h1>{{$amenity->name}}</h1>

                    <form action="{{ route('amenity.destroy',$amenity->id) }}" method="post">    
                    <a class="btn btn-primary" href="{{ route('amenity.edit',$amenity->id) }}">Edit</a>   
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