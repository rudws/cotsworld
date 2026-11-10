
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotswold Aero Hire Plane Hire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="index.php">Cotswold Aero Hire</a>
                <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse" data-bs-target="#mainNav"
                        aria-controls="mainNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="fleet.php">Fleet</a></li>
                    <li class="nav-item"><a class="nav-link active" href="bookings.php">Bookings</a></li>
                  </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
      <div class="container">
        <form id="booking" class="row g-3" onsubmit="checkTimes(); return this.reportValidity();" novalidate>
          <div class="col-md-6"><label class="form-label" for="starts_at">Start</label><input oninput="checkTimes()" class="form-control" type="datetime-local" id="starts_at" name="starts_at" required><div class="invalid-feedback"></div></div>
          <div class="col-md-6"><label class="form-label" for="ends_at">End</label><input oninput="checkTimes()" class="form-control" type="datetime-local" id="ends_at" name="ends_at" required><div class="invalid-feedback"></div></div>
          <div class="col-md-6"><label class="form-label" for="purpose">Purpose</label><select oninput="checkTimes()" class="form-select" id="purpose" name="purpose" required><option value="">Choose</option><option>solo hire</option><option>lesson</option><option>check flight</option></select><div class="invalid-feedback">Choose a purpose.</div></div>
          <div class="col-12"><button class="btn btn-primary">Request booking</button></div>
        </form>
      </div>

      <h2 class="display-4">My Bookings</h2>
      <p class="lead">View and manage your bookings.</p>

      <div class="container py-5">
        <div id="booking-list" class="row g-4"></div>
      </div>

      <div id="booking-empty" class="alert alert-info" role="alert" style="display:none;">You have not booked any flights yet.</div>
    </main>

    <footer class="bg-body-tertiary text-center py-3">
        <p class="mb-0">&copy; 2026 Cotswold Aero Hire Plane Hire. All rights reserved.</p>
    </footer>
    <script>
      var start = document.getElementById('starts_at');
      var end = document.getElementById('ends_at');
      function checkTimes() {
        var s = new Date(start.value), e = new Date(end.value);
        end.setCustomValidity('');
        if (e <= s) end.setCustomValidity('End must be after start');
        var hours = (e - s) / 36e5;
        if (hours < 1 || hours > 4) end.setCustomValidity('Hire must be 1 to 4 hours');
        if (s < new Date()) start.setCustomValidity('Start cannot be in the past'); else start.setCustomValidity('');
        showState(start); showState(end);
      }

      function showState(field) {
        var ok = field.validity.valid;
        field.classList.toggle('is-invalid', !ok);
        field.classList.toggle('is-valid', ok && field.value !== '');
        var msg = field.parentElement.querySelector('.invalid-feedback');
        if (msg) msg.textContent = field.validationMessage;
      }
    </script>
    <script src="assets/js/bookings.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>