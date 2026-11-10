const bookings = [
  {
    aircraft: 'G-JPLA',
    status: 'Booked',
    statusClass: 'bg-success',
    date: '2026-11-15',
    start: '10:00',
    end: '12:00',
    purpose: 'Training',
    instructor: 'John Smith'
  },
  {
    aircraft: 'G-JPLB',
    status: 'Flown',
    statusClass: 'bg-secondary',
    date: '2026-11-10',
    start: '14:00',
    end: '16:00',
    purpose: 'Leisure',
    instructor: null
  }
];

document.addEventListener('DOMContentLoaded', () => {
  const list = document.getElementById('booking-list');
  const empty = document.getElementById('booking-empty');

  if (!list) {
    return;
  }

  if (!bookings.length) {
    if (empty) empty.style.display = 'block';
    return;
  }

  if (empty) empty.style.display = 'none';

  list.innerHTML = bookings.map((booking) => `
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card h-100">
        <div class="card-body">
          <h2 class="card-title h5">
            ${booking.aircraft} <span class="badge ${booking.statusClass}">${booking.status}</span>
          </h2>
          <p class="card-text">Date: ${booking.date}</p>
          <p class="card-text">Start Time: ${booking.start}</p>
          <p class="card-text">End Time: ${booking.end}</p>
          <p class="card-text">Purpose: ${booking.purpose}</p>
          ${booking.instructor ? `<p class="card-text">Instructor: ${booking.instructor}</p>` : ''}
          <div class="btn-group" role="group">
            <button class="btn btn-primary">View Details</button>
            <button class="btn btn-danger">Cancel Booking</button>
          </div>
        </div>
      </div>
    </div>
  `).join('');
});
