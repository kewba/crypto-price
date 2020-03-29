@extends('master')
@section('title')
Crypto News
@endsection
@section('og-title')Crypto News @stop
@section('meta-description')Crytpo Markets Todays bulletin board of news from the cryto space.  @stop
@section('intro')
<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
      <h1 class="text-center text-white">Crypto News</h1>
</section>
@endsection

@section('content')
<section id="blog-standard" class="section blog blog-card-fullwidth mild-bg">
    <div class="container">
        <div class="row">
        <?php foreach($newsItems as $item) :?>
            <div class="col-lg-4 col-md-4 col-sm-12 pt-1 pb-1">
                <div class="blog-post ">
                    <img class="img-fluid center-block" src="<?= $item['img_url'];?>" alt="<?= $item['title']; ?>">
                    <div class="blog-content">
                        <h5 class="pt-2 text-center">
                            <a href="<?=$item['seo_url']; ?>">
                               <?=$item['title']; ?>
                            </a>
                        </h5>
                        <p><?= $item['desc']; ?></p>
                        <div class="post-meta pb-3">
                            <span class="blog-catagory">Published</span>
                            <span><?= $item['date']; ?></span>
                        </div>
                        <a href="<?= $item['seo_url']; ?>" class="btn btn-primary btn-lg btn-block ">View Article</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            
            
        </div>

        

        <nav class="row justify-content-center">
           
            {{ $mainNewsData->onEachSide(1)->links() }}
        </nav>
    </div>
</section>
@endsection