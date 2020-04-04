@extends('admin')

@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Image</h1>
            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
 <a href="{{ route('bnc.edit',$nc['bbc_id']) }}" class="btn btn-outline-primary"> Back</a>
        <a href="#" class="btn btn-outline-primary">Add Image</a>
</div>
            <form id="newschan-form" action="{{ route('bnc.imgupdate',$nc['bbc_id']) }}" method="POST">
                
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Image</label>
                <select class="form-control" id="bbc_chan_fav" name="bbc_chan_fav">
                <option value="{{$nc['bbc_chan_fav']}}" selected>{{$nc['bbc_chan_fav']}}</option>
                   <?php foreach($files as $fn) :?> 
                       <option value="{{$fn}}">{{$fn}}</option>
                    <?php endforeach;?>
                </select>
            </div>
                @csrf
                @method('PUT')

                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Image') }}
                                </button>
                            </div>
                        </div>
             </form>
 @endsection