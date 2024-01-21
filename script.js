const menuBtn = document.querySelector(".menu-btn");
const navBar = document.querySelector(".mobile-menu");
console.log(menuBtn);
console.log(navBar);

menuBtn.addEventListener('click', () => navBar.classList.toggle('active'));


document.addEventListener('scroll', () => {
  const header = document.querySelector('.header-wrapper');

  if (window.scrollY > 0) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
  }
})