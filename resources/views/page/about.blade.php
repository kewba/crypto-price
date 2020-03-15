@extends('master')
@section('title')
About Us
@endsection
@section('intro')
<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
      <h1 class="text-center text-white">About Us</h1>
</section>
@endsection
@section('content')
  <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          
          <p>At CMT we believe blockchains and cryptos will have a firm place in our landscape of emerging technologies.</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
            CMT are a crowd of crypto enthusiasts on a journey to becoming conosur's. The blockchain technology is a very exciting  prospect and since its inception has maintained the reputation as a disruptive technology. 
            </p>

            <div class="icon-box ">
              <div class="icon"><i class="fa fa-chart"></i></div>
              <h4 class="title"><a href="">Blockchain analysis</a></h4>
              <p class="description">The analysis of public blockchains has become increasingly important with the popularity of bitcoin, Ethereum, litecoin and other cryptocurrencies.</p>
            </div>

            <div class="icon-box " data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Decentralization</a></h4>
              <p class="description">Open blockchains are more user-friendly than some traditional ownership records.</p>
            </div>

            <div class="icon-box " data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Permissionless</a></h4>
              <p class="description">The great advantage to an open, permissionless, or public, blockchain network is that guarding against bad actors is not required and no access control is needed</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 ">
            <img src="img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 ">
            <img src="img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6  pt-5 pt-lg-0">
            <h4>Education.</h4>
            <p>
            For anyone to truly appreciate the benefits that can be gained from the use of blockchain technology it very important to be educated with a firm understanding. 
            </p>
            <p>
            At CMT we are on a mission to share as much knowledge and data to empower more  users to benefit from this growing technology.  
            </p>
          </div>
        </div>

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
@endsection