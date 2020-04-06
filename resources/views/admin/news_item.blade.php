@extends('admin')

@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">News Item Edit</h1>
            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <a href="{{@url()->previous()}}" class="btn btn-outline-primary"> Back</a>
                   
            </div>
            <form id="newschan-form" action="{{ route('bni.update',$ni['bbi_id']) }}" method="POST">
                <div class="form-group">
                    <label for="bbi_title">Title</label>
                    <input type="text" class="form-control @error('bbi_title') is-invalid @enderror" id="bbi_title" name="bbi_title" placeholder="Title" value="{{$ni['bbi_title']}}">
                    @error('bbi_title')
                        <div class="invalid-feedback">
                        The title is required. 
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bbi_link">Link</label>
                    <input type="text" class="form-control @error('bbi_link') is-invalid @enderror" id="bbi_link" name="bbi_link" placeholder="Link" value="{{$ni['bbi_link']}}">
                    @error('bbi_link')
                        <div class="invalid-feedback">
                        The link is required. 
                        </div>
                    @enderror
                </div>
                
                   
                        
                        
         
                
                <div class="form-group">
                    <label for="bbi_desc">Channel Description</label>
                    <textarea class="form-control @error('bbi_desc') is-invalid @enderror" id="bbi_desc" name="bbi_desc" placeholder="Description" >{{$ni['bbi_desc']}}</textarea>
                    @error('bbc_desc')
                        <div class="invalid-feedback">
                        The description is required. 
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bbi_cats">Categories</label>
                    <input type="text" class="form-control @error('bbi_cats') is-invalid @enderror" id="bbi_cats" name="bbi_cats" placeholder="Categories" value="{{$ni['bbi_cats']}}">
                    @error('bbc_lang')
                        <div class="invalid-feedback">
                        The categories is required. 
                        </div>
                    @enderror
                </div>
                <input type="hidden" class="form-control" id="bbi_id" name="bbi_id" value="{{$ni['bbi_id']}}" >
                <input type="hidden" class="form-control" id="bbc_id" name="bbc_id" value="{{$ni['bbc_id']}}" >
                <input type="hidden" class="form-control" id="bbc_name" name="bbc_name" value="{{$ni['bbc_name']}}" >
                <input type="hidden" class="form-control" id="bbi_category" name="bbi_category" value="{{$ni['bbi_category']}}" >
                <input type="hidden" class="form-control" id="bbi_pubdate" name="bbi_pubdate" value="{{$ni['bbi_pubdate']}}" >
                <input type="hidden" class="form-control" id="bbi_timestamp" name="bbi_timestamp" value="{{$ni['bbi_timestamp']}}" >
                @csrf

         <div class="form-group row mb-0">
            <div class="col-md-6 ">
                <button type="submit" class="btn btn-primary">
                    {{ __('Edit News Item') }}
                </button>
            </div>
        </div>
             </form>
 @endsection