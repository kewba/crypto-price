@extends('admin')

@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Remove News Channel</h1>
            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <a href="{{ route('bnc.index') }}" class="btn btn-outline-primary"> Back</a>
                   
            </div>
            <form id="newschan-form" action="{{ route('bnc.destroy',$nc['bbc_id']) }}" method="POST">
               
                
            <div class="card text-white bg-danger mb-3" >
                <div class="card-header">Remove News Channel</div>
                <div class="card-body">
                    <h5 class="card-title">Delete {{$nc['bbc_channel']}}</h5>
                    <p class="card-text">Are you sure you want to delete <strong>{{$nc['bbc_channel']}}</strong>, It will be permanently removed.</p>
                </div>
            </div>
            @method('DELETE')
                @csrf

         <div class="form-group row mb-0">
            <div class="col-md-12 ">
                <a href="{{ route('bnc.index') }}" class="btn btn-primary"> {{ __('Return to list') }}</a>
            
                <button type="submit" class="btn btn-danger">
                    {{ __('Remove News Channel') }}
                </button>
            </div>
        </div>
             </form>
 @endsection