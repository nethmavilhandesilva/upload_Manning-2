<?php 
  @include 'partials/header.php';
?>
<head>
    <link rel="stylesheet" href="/build/assets/css/style.css">
    <link rel="stylesheet" href="/build/assets/css/style.min.css">
    <link rel="stylesheet" href="/build/assets/css/style.min.css.map">
</head>
<body>
  <div class="layer"></div>
  <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
  <div class="page-flex">
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Manning Dashboard</h2>
        <div class="row stat-cards">
          <!-- Loop through the stock data -->
          @foreach($stockData as $data)
            <div class="col-md-6 col-xl-3">
              <article class="stat-cards-item">
                <div class="stat-cards-icon primary">
                  <i data-feather="bar-chart-2" aria-hidden="true"></i>
                </div>
                <div class="stat-cards-info">
                  <!-- Displaying location name dynamically -->
                  <p class="stat-cards-info__num">{{ $data->location_name }}</p> <!-- Dynamic location -->
                </div>
                <div class="stat-cards-info">
                  <a href="{{ route('set.customer', ['customer_id' => $data->customer_id]) }}" class="cssbuttons-io-button">
                    EXPLORE
                    <div class="icon">
                      <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                      </svg>
                    </div>
                  </a>
                </div>
              </article>
            </div>
          @endforeach
        </div>
      </div>
    </main>
    <?php @include 'partials/footer.php'; ?>
  </div>
</div>

<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>
