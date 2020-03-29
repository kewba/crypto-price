<!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="/" class="scrollto"><img src="{{ asset('img/logos.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/">Home</a></li>
          <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="/about">About Us</a></li>
          <li class="{{ (request()->is('news')) ? 'active' : '' }}"><a href="/news">News</a></li>
          <li class="{{ (request()->is('crypto')) ? 'active' : '' }}"><a href="/crypto">Cryptos</a></li>
          <!-- <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="/contact">Contact</a></li> -->
          
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->