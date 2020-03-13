@extends('master')

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
                        <h5>
                            <a href="<?= $item['link']; ?>">
                               <?= $item['title']; ?>
                            </a>
                        </h5>
                        <?= $item['desc']; ?>
                        <div class="post-meta ">
                            <span class="blog-catagory">Published</span>
                            <span><?= $item['date']; ?></span>
                        </div>
                        <a href="<?= $item['link']; ?>" class="btn btn-primary btn-lg btn-block ">View Article</a>
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