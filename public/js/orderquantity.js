// JavaScript to handle button clicks and update quantity
const quantityInput = document.querySelector(".quantity-input input");
const minusBtn = document.querySelector(".quantity-btn.minus");
const plusBtn = document.querySelector(".quantity-btn2.plus");

minusBtn.addEventListener("click", () => {
  if (parseInt(quantityInput.value) > 1) {
    quantityInput.value = parseInt(quantityInput.value) - 1;
  }
});

plusBtn.addEventListener("click", () => {
  quantityInput.value = parseInt(quantityInput.value) + 1;
});
