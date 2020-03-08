@extends('master')

@section('intro')
<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>We provide CryptoCurrency<br><span>Market Data</span><br>for better decisions.</h2>
        <div>
          <a href="/news" class="btn-get-started scrollto">Crypto News</a>
          <a href="/crypto" class="btn-services scrollto">Our Cryptos</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->
@endsection

@section('content')


  <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Crypto Market Today</h3>
          <p>At CMT we believe blockchains and cryptos will have a firm place in our landscape of emerging technologies.</p>
        </header>

        <div class="row about-extra">
          <div class="col-lg-6  order-1 order-lg-2">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6  pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Blockchains and Cryptocurrency</h4>
            <p>
            A blockchain,originally block chain, is a growing list of records, called blocks, that are linked using cryptography.Each block contains a cryptographic hash of the previous block,a timestamp, and transaction data (generally represented as a Merkle tree). 
            </p>
            <p>
            A cryptocurrency (or crypto currency) is a digital asset designed to work as a medium of exchange that uses strong cryptography to secure financial transactions, control the creation of additional units, and verify the transfer of assets. Cryptocurrencies use decentralized control as opposed to centralized digital currency and central banking systems.
            </p>
            <p>
            The decentralized control of each cryptocurrency works through distributed ledger technology, typically a blockchain, that serves as a public financial transaction database.
            </p>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>CMT Cryptos</h3>
          <p>The cryptocurencies our bots are currently tracking.</p>
        </header>

        <div class="row row-eq-height justify-content-center">


        <div class="col-lg-3 mb-3">
            <div class="card">
                <i class="fa fa-btc"></i>
              <div class="card-body">
                <h5 class="card-title">Bitcoin</h5>
                <p class="card-text">Bitcoin is a cryptocurrency. It is a decentralized digital currency without a central bank or single administrator.</p>
                <a href="/crypto" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card">
            <i class="cf cf-eth"></i>
              <div class="card-body">
                <h5 class="card-title">Ethereum</h5>
                <p class="card-text">Ethereum is an open source, public, blockchain-based distributed computing platform and operating system .</p>
                <a href="/crypto" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card">
            <i class="cf cf-ltc"></i>
              <div class="card-body">
                <h5 class="card-title">Litecoin</h5>
                <p class="card-text">Litecoin is a peer-to-peer cryptocurrency and open-source software project released under the MIT/X11 license..</p>
                <a href="/crypto" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card">
            <i class="cf cf-dash"></i>
              <div class="card-body">
                <h5 class="card-title">Dash</h5>
                <p class="card-text">Dash is an open source cryptocurrency. It is an altcoin that was forked from the Bitcoin protocol.  </p>
                <a href="/crypto" class="readmore">Read more </a>
              </div>
            </div>
          </div>

        </div>

       
      </div>
    </section>

 

   
    

 

   


<section id="blog-standard" class="section blog blog-card-fullwidth mild-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
<div class="blog-post ">
    <img class="img-responsive center-block" src="img/blog_1.jpg" alt="Latest News 1">
    <div class="blog-content">
        <h5>
            <a href="blog__single__right_sidebar.html">
                Design Trends That We Will See Taking Over Web Design
            </a>
        </h5>
        <div class="post-meta">
            <span class="blog-catagory"><a href="#">Article</a></span>
            <span>01 Nov</span>
        </div>
    </div>
</div>
            </div>
            <div class="col-md-4 col-sm-4">
<div class="blog-post ">
    <img class="img-responsive center-block" src="img/blog_2.jpg" alt="Latest News 1">
    <div class="blog-content">
        <h5>
            <a href="blog__single__right_sidebar.html">
                Web Development Reading List #112: Updated Edge
            </a>
        </h5>
        <div class="post-meta">
            <span class="blog-catagory"><a href="#">Performance</a></span>
            <span>22 Jan</span>
        </div>
    </div>
</div>
            </div>
            <div class="col-md-4 col-sm-4">
<div class="blog-post ">
    <img class="img-responsive center-block" src="img/blog_3.jpg" alt="Latest News 1">
    <div class="blog-content">
        <h5>
            <a href="blog__single__right_sidebar.html">
                Static Website Generators Reviewed: Jekyll, Middleman
            </a>
        </h5>
        <div class="post-meta">
            <span class="blog-catagory"><a href="#">Web Development</a></span>
            <span>01 Feb</span>
        </div>
    </div>
</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-4">
<div class="blog-post ">
    <img class="img-responsive center-block" src="img/blog_5.jpg" alt="Latest News 1">
    <div class="blog-content">
        <h5>
            <a href="blog__single__right_sidebar.html">
                Using System UI Fonts In Web Design: A Quick Practical Guide
            </a>
        </h5>
        <div class="post-meta">
            <span class="blog-catagory"><a href="#">Psychology</a></span>
            <span>01 Apr</span>
        </div>
    </div>
</div>
            </div>
            <div class="col-md-4 col-sm-4">
<div class="blog-post ">
    <img class="img-responsive center-block" src="img/blog_6.jpg" alt="Latest News 1">
    <div class="blog-content">
        <h5>
            <a href="blog__single__right_sidebar.html">
                Freebie: Voyage Icon Set (40 Icons, AI, EPS, SVG, PNG)
            </a>
        </h5>
        <div class="post-meta">
            <span class="blog-catagory"><a href="#">User Experience</a></span>
            <span>01 May</span>
        </div>
    </div>
</div>
            </div>
            <div class="col-md-4 col-sm-4">
<div class="blog-post ">
    <img class="img-responsive center-block" src="img/blog_7.jpg" alt="Latest News 1">
    <div class="blog-content">
        <h5>
            <a href="blog__single__right_sidebar.html">
                The State Of Airline Websites 2015: Lessons Learned
            </a>
        </h5>
        <div class="post-meta">
            <span class="blog-catagory"><a href="#">Flexbox</a></span>
            <span>16 June</span>
        </div>
    </div>
</div>
            </div>
        </div>

        <nav class="blog-pagination">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>
	

@endsection