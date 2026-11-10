document.addEventListener('DOMContentLoaded', () => {
  const fleetGrid = document.getElementById('fleet-grid');
  const sortButton = document.getElementById('sort-rate-toggle');

  if (!fleetGrid || !sortButton) {
    return;
  }

  let ascending = true;

  sortButton.addEventListener('click', () => {
    const cards = Array.from(fleetGrid.children);

    cards.sort((a, b) => {
      const left = Number(a.dataset.rate) || 0;
      const right = Number(b.dataset.rate) || 0;
      return ascending ? left - right : right - left;
    });

    cards.forEach((card) => fleetGrid.appendChild(card));
    ascending = !ascending;

    sortButton.textContent = ascending
      ? 'Sort by hourly rate: low to high'
      : 'Sort by hourly rate: high to low';
  });
});
