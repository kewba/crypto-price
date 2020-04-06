@extends('admin')

@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Remove News Item from {{$ni['bbc_name']}}</h1>
            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <a href="{{@url()->previous()}}" class="btn btn-outline-primary"> Back</a>
                   
            </div>
            <form id="newschan-form" action="{{route('bni.destroy', $ni['bbi_id'])}}" method="POST">
               
                
            <div class="card text-white bg-danger mb-3" >
                <div class="card-header">Remove News Item</div>
                <div class="card-body">
                    <h5 class="card-title">Delete {{$ni['bbi_title']}}</h5>
                    <p class="card-text">Are you sure you want to delete <strong>{{$ni['bbi_title']}}</strong>, It will be permanently removed.</p>
                </div>
            </div>
            @method('DELETE')
                @csrf

         <div class="form-group row mb-0">
            <div class="col-md-12 ">
                <a href="{{@url()->previous()}}" class="btn btn-primary"> {{ __('Return to list') }}</a>
            
                <button type="submit" class="btn btn-danger">
                    {{ __('Remove News Item') }}
                </button>
            </div>
        </div>
             </form>
 @endsection