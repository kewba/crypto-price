@extends('admin')

@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">News Channel</h1>
            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <a href="{{ route('bnc.index') }}" class="btn btn-outline-primary"> Back</a>
                     <a href="/admin/newschannels/{{$nc['bbc_id']}}/imgedit" class="btn btn-outline-primary">
                        Edit Image
                     </a>
            </div>
            <form id="newschan-form" action="{{ route('bnc.update',$nc['bbc_id']) }}" method="POST">
                <div class="form-group">
                    <label for="bbc_channel">Channel Name</label>
                    <input type="text" class="form-control @error('bbc_channel') is-invalid @enderror" id="bbc_channel" name="bbc_channel" placeholder="Channel Name" value="{{$nc['bbc_channel']}}">
                    @error('bbc_channel')
                        <div class="invalid-feedback">
                        The channel name is required. 
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bbc_link">Channel Link</label>
                    <input type="text" class="form-control" id="bbc_link" name="bbc_link" placeholder="Channel Name" value="{{$nc['bbc_link']}}">
                </div>
                
                    <div class="form-group">
                        <label for="bbc_chan_fav">Channel Image</label>
                        <input type="text" class="form-control" id="bbc_img" name="bbc_img" placeholder="Channel Name" value="{{$nc['bbc_chan_fav']}}" >
                    </div>
                
                <div class="form-group">
                    <label for="bbc_desc">Channel Description</label>
                    <textarea class="form-control" id="bbc_desc" name="bbc_desc" placeholder="Channel Description" >{{$nc['bbc_desc']}}</textarea>
                </div>
                <div class="form-group">
                    <label for="bbc_lang">Channel Language</label>
                    <input type="text" class="form-control" id="bbc_lang" name="bbc_lang" placeholder="Channel Language" value="{{$nc['bbc_lang']}}">
                </div>
                @csrf
                @method('PUT')

         <div class="form-group row mb-0">
            <div class="col-md-6 ">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update News Channel') }}
                </button>
            </div>
        </div>
             </form>
 @endsection