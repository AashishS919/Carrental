//for signin popup
document.querySelector("#sign-in").addEventListener("click", function () {
  document.querySelector(".popup1").classList.add("active");
});
document
  .querySelector(".popup1 .close-btn")
  .addEventListener("click", function () {
    document.querySelector(".popup1").classList.remove("active");
  });

//for sign up popup
document.querySelector("#sign-up").addEventListener("click", function () {
  document.querySelector(".popup2").classList.add("active");
});
document
  .querySelector(".popup2 .close-btn2")
  .addEventListener("click", function () {
    document.querySelector(".popup2").classList.remove("active");
  });

// for car rental form

document.querySelectorAll(".rent").forEach(function (element) {
  element.addEventListener("click", function () {
    document.querySelector(".carform").classList.add("active");
  });
});

document
  .querySelector(".carform .regcls-btn")
  .addEventListener("click", function () {
    document.querySelector(".carform").classList.remove("active");
  });
