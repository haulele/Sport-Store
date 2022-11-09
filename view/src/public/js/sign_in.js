function password_show_hide(targetID) {
var x = document.getElementById(targetID);
  var show_eye = x.parentElement.nextElementSibling.firstElementChild;
  var hide_eye = x.parentElement.nextElementSibling.lastElementChild;
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
