@extends('master')

@section('title')
Cryptocurrency
@endsection
@section('intro')
<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
      <h1 class="text-center text-white">Cryptocurrency</h1>
</section>
@endsection


@section('content')
    <!--==========================
      Clients Section
    ============================-->

    <div class="container">
    

    <ul class="nav nav-tabs justify-content-center" id="cryptoTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="btc-tab" data-toggle="tab" href="#btc" role="btc" aria-controls="home" aria-selected="true"><i class="fa fa-btc"></i> Bitcoin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="eth-tab" data-toggle="tab" href="#eth" role="tab" aria-controls="eth" aria-selected="false"><i class="cf cf-eth"></i> Ethereum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="ltc-tab" data-toggle="tab" href="#ltc" role="tab" aria-controls="ltc" aria-selected="false"><i class="cf cf-ltc"></i> Litecoin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="dash-tab" data-toggle="tab" href="#dash" role="tab" aria-controls="dash" aria-selected="false"><i class="cf cf-dash"></i> Dash</a>
          </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      
      <div class="tab-pane fade show active" id="btc" role="tabpanel" aria-labelledby="btc-tab">
           <section >
                  
                      <div class="col-md-12 py-1">
                        <div class="section-header pt-3">
                            <h3 ><i class="fa fa-btc"></i> Bitcoin USD Price</h3>
                            <h3 >{{$crypts['BTC']}}</h3>
                          </div>
                          <div class="card">
                              <div class="card-body">
                                  <canvas id="btcLine"></canvas>
                              </div>
                          </div>
                      </div>
              


                  <div class="container">
                          <div class="section-header">
                            <h4 class="text-center pt-3"><i class="fa fa-btc"></i> Bitcoin Currency Exchange Rates</h4>
                            <p>Currency exchange rates updated {{$ratesUpdate}}</p>
                          </div>
                          <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Country</th>
                                        <th scope="col">BTC Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php foreach($btcList as $btc) :?>

                                          <tr>
                                            <td><?= $btc['currency']; ?></td>
                                            <td><?= $btc['btc_val']; ?></td>
                                          </tr>
                                          <?php endforeach;?>
                                </tbody>
                            </table>
                          </div>
                  </div>
            </section>
      </div>

      <!-- eth -->
      <div class="tab-pane fade" id="eth" role="tabpanel" aria-labelledby="eth-tab">
      <section >
                  
                  <div class="col-md-12 py-1">
                    <div class="section-header pt-3">
                        <h3 ><i class="cf cf-eth"></i> Ethereum USD Price</h3>
                        <h3 >{{$crypts['ETH']}}</h3>
                      </div>
                      <div class="card">
                          <div class="card-body">
                              <canvas id="ethLine"></canvas>
                          </div>
                      </div>
                  </div>
          


              <div class="container">
                      <div class="section-header">
                        <h4 class="text-center pt-3"><i class="cf cf-eth"></i> Ethereum Currency Exchange Rates</h4>
                        <p>Currency exchange rates updated {{$ratesUpdate}}</p>
                      </div>
                      <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Country</th>
                                    <th scope="col">ETH Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php foreach($ethList as $eth) :?>

                                      <tr>
                                        <td><?= $eth['currency']; ?></td>
                                        <td><?= $eth['eth_val']; ?></td>
                                      </tr>
                                      <?php endforeach;?>
                            </tbody>
                        </table>
                      </div>
              </div>
        </section>
      </div>
      <!-- litecoin -->
      <div class="tab-pane fade" id="ltc" role="tabpanel" aria-labelledby="ltc-tab">
      <section >
                  
                  <div class="col-md-12 py-1">
                    <div class="section-header pt-3">
                        <h3 ><i class="cf cf-ltc"></i> Litecoin USD Price</h3>
                        <h3 >{{$crypts['LTC']}}</h3>
                      </div>
                      <div class="card">
                          <div class="card-body">
                              <canvas id="ltcLine"></canvas>
                          </div>
                      </div>
                  </div>
          


              <div class="container">
                      <div class="section-header">
                        <h4 class="text-center pt-3"><i class="cf cf-ltc"></i> Litecoin Currency Exchange Rates</h4>
                        <p>Currency exchange rates updated {{$ratesUpdate}}</p>
                      </div>
                      <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Country</th>
                                    <th scope="col">LTC Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php foreach($ltcList as $ltc) :?>

                                      <tr>
                                        <td><?= $ltc['currency']; ?></td>
                                        <td><?= $ltc['ltc_val']; ?></td>
                                      </tr>
                                      <?php endforeach;?>
                            </tbody>
                        </table>
                      </div>
              </div>
        </section>
      </div>
      <!-- dash -->
      <div class="tab-pane fade" id="dash" role="tabpanel" aria-labelledby="dash-tab">
      <section >
                  
                  <div class="col-md-12 py-1">
                    <div class="section-header pt-3">
                        <h3 ><i class="cf cf-dash"></i> Dash USD Price</h3>
                        <h3 >{{$crypts['DASH']}}</h3>
                      </div>
                      <div class="card">
                          <div class="card-body">
                              <canvas id="dashLine"></canvas>
                          </div>
                      </div>
                  </div>
          


              <div class="container">
                      <div class="section-header">
                        <h4 class="text-center pt-3"><i class="cf cf-dash"></i> DASH Currency Exchange Rates</h4>
                        <p>Currency exchange rates updated {{$ratesUpdate}}</p>
                      </div>
                      <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Country</th>
                                    <th scope="col">DASH Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php foreach($dashList as $dash) :?>

                                      <tr>
                                        <td><?= $dash['currency']; ?></td>
                                        <td><?= $dash['dash_val']; ?></td>
                                      </tr>
                                      <?php endforeach;?>
                            </tbody>
                        </table>
                      </div>
              </div>
        </section>
      </div>
    
    <!-- end tab -->
    </div>


    <div class="row my-2">
        <div class="col-md-6 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chLine"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chBar"></canvas>
                </div>
            </div>
        </div>
    </div>
    
</div>

   
    
<script src="js/Chart.js"></script>
    <script>
    /* chart.js chart examples */

var cryp_data = <?=$chz;?>;
console.log(cryp_data);
let btc_data = cryp_data.datasets[0];
let ltc_data = cryp_data.datasets[1];
let eth_data = cryp_data.datasets[2];
let dash_data = cryp_data.datasets[3];
//console.log(btc_data);
// chart colors
var colors = ['#007bff','#28a745','#333333','#c3e6cb','#dc3545','#6c757d'];

/* BTC line chart */
var btcLine = document.getElementById("btcLine");
var chartDataBtc = {
  labels: cryp_data.labels ,
  datasets: [{data: btc_data.data,backgroundColor: 'transparent',borderColor: colors[0], borderWidth: 4,pointBackgroundColor: colors[0] }]
};
if (btcLine) {
  new Chart(btcLine, {
  type: 'line',
  data: chartDataBtc,
  options: {
    scales: { xAxes: [{ ticks: { beginAtZero: false} }]},
    legend: { display: false },
    responsive: true
  }
  });
}

/* LTC line chart */
var ltcLine = document.getElementById("ltcLine");
var chartDataLtc = {
  labels: cryp_data.labels ,
  datasets: [{data: ltc_data.data,backgroundColor: 'transparent',borderColor: colors[0], borderWidth: 4,pointBackgroundColor: colors[0] }]
};
if (ltcLine) {
  new Chart(ltcLine, {
  type: 'line',
  data: chartDataLtc,
  options: {
    scales: { xAxes: [{ ticks: { beginAtZero: false} }]},
    legend: { display: false },
    responsive: true
  }
  });
}


/* ETH line chart */
var ethLine = document.getElementById("ethLine");
var chartDataEth = {
  labels: cryp_data.labels ,
  datasets: [{data: eth_data.data,backgroundColor: 'transparent',borderColor: colors[0], borderWidth: 4,pointBackgroundColor: colors[0] }]
};
if (ethLine) {
  new Chart(ethLine, {
  type: 'line',
  data: chartDataEth,
  options: {
    scales: { xAxes: [{ ticks: { beginAtZero: false} }]},
    legend: { display: false },
    responsive: true
  }
  });
}


/* DASH line chart */
var dashLine = document.getElementById("dashLine");
var chartDataDash = {
  labels: cryp_data.labels ,
  datasets: [{data: dash_data.data,backgroundColor: 'transparent',borderColor: colors[0], borderWidth: 4,pointBackgroundColor: colors[0] }]
};
if (dashLine) {
  new Chart(dashLine, {
  type: 'line',
  data: chartDataDash,
  options: {
    scales: { xAxes: [{ ticks: { beginAtZero: false} }]},
    legend: { display: false },
    responsive: true
  }
  });
}


/* large line chart */
var chLine = document.getElementById("chLine");
var chartData = {
  labels: ["S", "M", "T", "W", "T", "F", "S"],
  datasets: [{
    data: [589, 445, 483, 503, 689, 692, 634],
    backgroundColor: 'transparent',
    borderColor: colors[0],
    borderWidth: 4,
    pointBackgroundColor: colors[0]
  }
//   {
//     data: [639, 465, 493, 478, 589, 632, 674],
//     backgroundColor: colors[3],
//     borderColor: colors[1],
//     borderWidth: 4,
//     pointBackgroundColor: colors[1]
//   }
  ]
};
if (chLine) {
  new Chart(chLine, {
  type: 'line',
  data: chartData,
  options: {
    scales: {
      xAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    responsive: true
  }
  });
}



/* bar chart */
var chBar = document.getElementById("chBar");
if (chBar) {
  new Chart(chBar, {
  type: 'bar',
  data: {
    labels: ["S", "M", "T", "W", "T", "F", "S"],
    datasets: [{
      data: [589, 445, 483, 503, 689, 692, 634],
      backgroundColor: colors[0]
    },
    {
      data: [639, 465, 493, 478, 589, 632, 674],
      backgroundColor: colors[1]
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        barPercentage: 0.4,
        categoryPercentage: 0.5
      }]
    }
  }
  });
}

    </script>
@endsection