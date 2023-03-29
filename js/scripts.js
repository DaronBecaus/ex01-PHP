const openModalButton1 = document.querySelector("#open-add");
const closeModalButton1 = document.querySelector("#close-add");
const modal1 = document.querySelector("#modal1");
const fade1 = document.querySelector("#fade1");

const toggleModal1 = () => {
  modal1.classList.toggle("hide");
  fade1.classList.toggle("hide");
};

[openModalButton1, closeModalButton1, fade1].forEach((el) => {
  el.addEventListener("click", () => toggleModal1());
});

const openModalButton2 = document.querySelector("#open-edite");
const closeModalButton2 = document.querySelector("#close-edite");
const modal2 = document.querySelector("#modal2");
const fade2 = document.querySelector("#fade2");

const toggleModal2 = () => {
  modal2.classList.toggle("hide");
  fade2.classList.toggle("hide");
};

[openModalButton2, closeModalButton2, fade2].forEach((el) => {
  el.addEventListener("click", () => toggleModal2());
});
