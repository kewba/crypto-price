@extends('master')
@section('title')
{{$newsItem['pg_meta_title']}}
@endsection
@section('og-title'){{$newsItem['pg_meta_title']}}@stop
@section('meta-description'){{$newsItem['pg_meta_desc']}}  @stop
@section('intro')
<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
      <h1 class="text-center text-white">{{$newsItem['pg_title']}}</h1>
</section>
@endsection

@section('content')
<section id="blog-standard" class="section blog blog-card-fullwidth mild-bg">
    <div class="row">
        <div class="container  pb-3 pt-3">
        
        <img src="{{ asset($newsItem['pg_image'])}}" class="img-fluid" />
        <div class="post-meta pb-2 pt-2">
                            <span class="blog-catagory">Published</span>
                            <span><strong><?= $newsItem['pg_posted']; ?></strong></span>
                            <br />
                            <a href="{{$newsItem['pg_link']}}" class="btn btn-primary btn-sm ">
                             {{$newsItem['pg_co_name']}}
                             </a>
                        </div>
                       
        <p>
        {{$newsItem['pg_desc']}}
        </p>
           
             <a href="{{$newsItem['pg_link']}}" class="btn btn-primary btn-lg btn-block ">View on {{$newsItem['pg_co_name']}}</a>
            
        </div>
    </div>
    
</section>
<div class="container">
         <div class="row">
         <?php foreach($relItems as $item) :?>
         
          
          
         <div class="col-md-4 col-sm-4 pt-1 pb-1">
               <div class="blog-post ">
                   <img class="img-fluid center-block" src="{{asset($item['rel_img'])}}" alt="{{$item['rel_title']}}">
                   <div class="blog-content pb-3">
                       <h5 class="text-center pt-2">
                           <a href="{{$item['rel_link']}}">
                           {{$item['rel_title']}}
                           </a>
                       </h5>
                       
                       <a href="{{$item['rel_link']}}" class="btn btn-primary btn-lg btn-block ">Read...</a>
                   </div>
               </div>
        </div>
       <?php endforeach;?>
         </div>
</div>
@endsection