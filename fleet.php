<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fleet</title>
  <link rel="stylesheet" href="assets/css/stylesheet.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark site-navbar" aria-label="Primary navigation">
      <div class="container">
        <a class="navbar-brand" href="index.php">CAH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#primaryNav" aria-controls="primaryNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="primaryNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="fleet.php">Fleet</a></li>
            <li class="nav-item"><a class="nav-link" href="bookings.php">Bookings</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section id="armada" class="armada">
    <div class="container py-5">
      <div class="fleet-sort-bar">
        <div>
          <h2 class="text-center mb-4">Our Fleet</h2>
          <p class="text-center mb-0">Explore our diverse fleet of aircraft available for hire. Whether you're looking for a small, nimble plane or a larger, more luxurious option, we have the perfect aircraft to suit your needs.</p>
        </div>
        <button id="sort-rate-toggle" type="button">Sort by hourly rate: low to high</button>
      </div>
    </div>

    <div class="container py-5">
      <div id="fleet-grid" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 g-lg-5">
        <div class="col" data-rate="145">
          <div class="card armada fleet-card text-center h-100">
            <div class="card-body py-3">
              <i class="fas fa-car fa-5x"></i>
              <h2 class="card-title text-center">G-JPLA Cessna 152</h2>
              <p class="card-text text-center">Aircraft for hire.</p>
            </div>
            <div>
              <img src="https://cdn.aeroreport.de/media/pages/good-to-know/airbus-a320-mittelstrecken-bestseller-seit-bald-40-jahren/78ed7eb092-1762851008/a320neo_f_0028_1980px-800x450-crop.webp" class="card-img-top" alt="A320">
            </div>
            <div class="summary w-100 d-flex flex-row flex-wrap border-top border-bottom p-3 m-1 justify-content-center">
              <div class="price d-flex flex-row justify-content-between align-items-baseline">
                <div class="currency fs-1 fw-bold flex-grow-0">£</div>
                <div class="nominal fs-4 fw-bold flex-grow-1 w-100 text-end rate-pill">145</div>
              </div>
              <div class="periode w-100 text-center mt-1">ph</div>
            </div>
            <div class="fleet-features d-flex flex-row flex-wrap w-100 m-1 justify-content-center align-content-between border-bottom">
              <div class="capacity p-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Capacity 7 pax">
                <i class="fas fa-users"></i><span class="ms-2">2 Seats</span>
              </div>
            </div>
            <div class="action text-center p-3 mt-auto">
              <div class="btn-group" role="group" aria-label="Card Action">
                <button type="button" class="btn btn-primary"><i class="fa fa-phone"></i><span class="d-none d-lg-inline-block ms-2">Call Us</span></button>
              </div>
            </div>
          </div>
        </div>

        <div class="col" data-rate="180">
          <div class="card armada fleet-card text-center h-100">
            <div class="card-body py-3">
              <i class="fas fa-car fa-5x"></i>
              <h2 class="card-title text-center">G-JPLB Piper PA-28 </h2>
              <p class="card-text text-center">Aircraft for hire.</p>
            </div>
            <div>
              <img src="https://mediarenditions.airbus.com/Gv32akgICAQsEtLMa_5SVWwpEY-FMn6SXNdtN4b7_NE/resize?src=kpkp%3A%2F%2Fairbus%2F38%2F651%2F651470-e6cgkfc5sc.jpg&w=480&h=270&poiX=50&poiY=50&el=true&t=fill-down" class="card-img-top" alt="A350">
            </div>
            <div class="summary w-100 d-flex flex-row flex-wrap border-top border-bottom p-3 m-1 justify-content-center">
              <div class="price d-flex flex-row justify-content-between align-items-baseline">
                <div class="currency fs-1 fw-bold flex-grow-0">£</div>
                <div class="nominal fs-4 fw-bold flex-grow-1 w-100 text-end rate-pill">180</div>
              </div>
              <div class="periode w-100 text-center mt-1">ph</div>
            </div>
            <div class="fleet-features d-flex flex-row flex-wrap w-100 m-1 justify-content-center align-content-between border-bottom">
              <div class="capacity p-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Capacity 15 pax">
                <i class="fas fa-users"></i><span class="ms-2">4 Seats</span>
              </div>
            </div>
            <div class="action text-center p-3 mt-auto">
              <div class="btn-group" role="group" aria-label="Card Action">
                <button type="button" class="btn btn-primary"><i class="fa fa-phone"></i><span class="d-none d-lg-inline-block ms-2">Call Us</span></button>
              </div>
            </div>
          </div>
        </div>

        <div class="col" data-rate="175">
          <div class="card armada fleet-card text-center h-100">
            <div class="card-body py-3">
              <i class="fas fa-car fa-5x"></i>
              <h2 class="card-title text-center">G-JPLC Cessna-172</h2>
              <p class="card-text text-center">Aircraft for hire.</p>
            </div>
            <div>
              <img src="https://www.grupooneair.com/wp-content/uploads/2021/03/a380-aircraft-engineering-marvel-path-to-cockpit.jpg" class="card-img-top" alt="A380">
            </div>
            <div class="summary w-100 d-flex flex-row flex-wrap border-top border-bottom p-3 m-1 justify-content-center">
              <div class="price d-flex flex-row justify-content-between align-items-baseline">
                <div class="currency fs-1 fw-bold flex-grow-0">£</div>
                <div class="nominal fs-4 fw-bold flex-grow-1 w-100 text-end rate-pill">175</div>
              </div>
              <div class="periode w-100 text-center mt-1">ph</div>
            </div>
            <div class="fleet-features d-flex flex-row flex-wrap w-100 m-1 justify-content-center align-content-between border-bottom">
              <div class="capacity p-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Capacity 7 pax">
                <i class="fas fa-users"></i><span class="ms-2">7 Seats</span>
              </div>
            </div>
            <div class="action text-center p-3 mt-auto">
              <div class="btn-group" role="group" aria-label="Card Action">
                <button type="button" class="btn btn-primary"><i class="fa fa-phone"></i><span class="d-none d-lg-inline-block ms-2">Call Us</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="assets/js/fleet.js"></script>
</body>
</html>