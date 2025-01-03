const userPic = document.querySelectorAll(".user__pic-nav");
const setMenu = document.querySelectorAll(".acc_menu");

userPic.forEach((pic) => {
  pic.addEventListener("click", () => {
    setMenu.forEach((menu) => {
        menu.classList.toggle("active");
    });
  });
});

// custom file input
const fileInput = document.querySelector('.file-input');
const fileName = document.querySelector('.file-name');

fileInput.addEventListener('change', function () {
  if (this.files && this.files[0]) {
    fileName.textContent = this.files[0].name;
  } else {
    fileName.textContent = 'No file chosen';
  }
});