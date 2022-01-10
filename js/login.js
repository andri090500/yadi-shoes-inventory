const tombol = document.querySelector(".fa-close");
tombol.addEventListener("click", (e) => {
  e.target.parentElement.style.display = "none";
});
