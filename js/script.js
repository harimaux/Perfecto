let adminFormSwitch = document.getElementById("admin_form_switch");
let adminFormSwithBack = document.getElementById("admin_form_switch_back");
let adminLoginForm = document.querySelector(".admin_login_container");
let adminRegisterForm = document.querySelector(".admin_register_container");

adminFormSwitch.addEventListener("click", () => {
  adminLoginForm.style.display = "none";
  adminRegisterForm.style.display = "flex";
});

adminFormSwithBack.addEventListener("click", () => {
  adminLoginForm.style.display = "flex";
  adminRegisterForm.style.display = "none";
});
