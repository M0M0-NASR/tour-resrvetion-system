let cost = document.querySelector(".cost");

let no = document.querySelector(".no-visitors");

let totalCost = document.querySelector(".total-cost");

no.oninput = function () {
  if (no.value > 0 && no.value <= 100) {
    totalCost.value = no.value * cost.value;
  } else {
    no.value = "";
  }
};
