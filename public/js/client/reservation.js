// Button
const buttonMin = document.querySelector('#min');
const buttonPlus = document.querySelector('#plus');
const poeple = document.getElementById('poeple');

// Total yang harus di bayar
const totalPriceContainer = document.querySelector('#total');
let priceSelected = 0;
// Add poeple

buttonPlus.addEventListener('click', (e) => {
  e.stopPropagation();
  e.preventDefault();
  poeple.value = parseInt(poeple.value) + 1;
  totalPriceContainer.value =
    parseInt(totalPriceContainer.value) * parseInt(poeple.value);
});

buttonMin.addEventListener('click', (e) => {
  e.stopPropagation();
  e.preventDefault();
  const amountPoeple = parseInt(poeple.value);
  if (amountPoeple > 1) {
    poeple.value = amountPoeple - 1;
    totalPriceContainer.value =
      parseInt(totalPriceContainer.value) / amountPoeple;
  }
});

// Date picker
const dateContainer = document.getElementById('date');

const picker = new Litepicker({
  element: dateContainer,
  minDays: 4,
  minDate: new Date(),
  numberOfColumns: 2,
  numberOfMonths: 2,
  selectForward: true,
  startDate: new Date(),
  format: 'YYYY-MM-DD',
  singleMode: false,
  tooltipText: {
    one: 'night',
    other: 'nights',
  },
  tooltipNumber: (totalDays) => {
    return totalDays - 1;
  },
  setup: (picker) => {
    picker.on('selected', (date1, date2) => {
      const difference = date1.getTime() - date2.getTime();
      const days = Math.abs(Math.ceil(difference / (1000 * 3600 * 24)));
      totalPriceContainer.value = parseInt(totalPriceContainer.value) * days;
    });
  },
});

// Select list package
const packageList = document.querySelectorAll('.reservation__card');
packageList.forEach((package) => {
  const packageItem = package.querySelector('.reservation__card--input');
  packageItem.addEventListener('click', () => {
    priceSelected = parseInt(
      package.querySelector('.reservation__price').dataset.price
    );
    totalPriceContainer.value = priceSelected;
    picker.clearSelection();
    poeple.value = 1;
    buttonMin.disabled = false;
    buttonPlus.disabled = false;
    dateContainer.disabled = false;
  });
});
