document.querySelector(`.card-btn`).addEventListener("click", () => {
  document.querySelector(".container").classList.toggle("change");
});

VanillaTilt.init(document.querySelector(".image"), {
  max: 25,
  speed: 400,
});
