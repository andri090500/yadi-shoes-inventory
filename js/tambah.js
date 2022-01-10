const input = document.querySelectorAll(".tambah2 .box-tambah form ul li input");
for (let i = 0; i < input.length; i++) {
  input[i].addEventListener("click", () => {
    input[i].style.boxShadow = "0 0 3px 3px lightblue";
    input[i].style.border = "1px solid lightblue";
  });
}
