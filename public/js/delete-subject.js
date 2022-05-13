let subjects = document.querySelector(".subjects");
document.addEventListener("click", function (e) {
  if (e.target.className === "delete") {
    console.log(e.target.parentElement);
    subjects.removeChild(e.target.parentElement);
  }
});
