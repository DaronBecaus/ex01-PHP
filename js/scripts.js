const openModalButton = document.querySelector("#open-add");
const closeModalButton = document.querySelector("#close-add");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggleModa = () => {
  modal.classList.toggle("hide");
  fade.classList.toggle("hide");
};

[openModalButton, closeModalButton, fade].forEach((el) => {
  el.addEventListener("click", () => toggleModal());
});
