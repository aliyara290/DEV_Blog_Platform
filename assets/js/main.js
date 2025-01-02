const userPic = document.querySelectorAll(".user__pic-nav");
const setMenu = document.querySelectorAll(".acc_menu");

userPic.forEach((pic) => {
  pic.addEventListener("click", () => {
    setMenu.forEach((menu) => {
        menu.classList.toggle("active");
    });
  });
});
console.log(userPic);
console.log(setMenu);
