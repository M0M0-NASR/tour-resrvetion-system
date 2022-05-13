let content = document.querySelector(".content");
content.children.length;
console.log(content.children.length);
document.addEventListener("click", function (e) {
  if (e.target.className === "delete") {
    content.removeChild(e.target.parentElement.parentElement);
    if (content.children.length < 2) {
      let p = document.createElement("p");
      p.innerText = "No items to show";
      content.appendChild(p);
      console.log("noo");
    }

    // subjects.removeChild(e.target.parentElement);
  }
  if (e.target.className === "update") {
    // window.location.href = "../pages/add-place.html";
    console.log(window.location.href);
  }
});

document.onload = function () {
  if (content.children.length == 1) {
    console.log("noo");
  }
};
