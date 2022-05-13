let btn = document.querySelector("form button");
let sec = document.querySelector(".subjects");

// console.log(btn);
btn.onclick = function (e) {
  e.preventDefault();
  addSubject();
  console.log("yrs");
};

function addSubject() {
  let span = document.createElement("span");
  let input = document.querySelector("input");
  let del = document.createElement("span");
  del.textContent = "X";
  del.className = "delete";
  if (input.value.length > 1) {
    span.textContent = input.value;
    span.appendChild(del);
    sec.appendChild(span);
  }

  //   form.appendChild(input);
  //   form.appendChild(btn);
  console.log(span);
}
