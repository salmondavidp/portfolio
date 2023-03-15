const burger = document.querySelector('.burger');
const navMenu = document.querySelector('#nav-menu');
const scrollImage = document.querySelector('.nav_logo img');


burger.addEventListener('click', () => {
  navMenu.classList.toggle('active');
  burger.classList.toggle('toggle');
});

//HEADER COLOR CHANGE When scroll
  window.addEventListener('scroll', function() {
    var header = document.querySelector('#header');
    console.log(header); // check if header is correctly selected
    var scrollPosition = window.scrollY;
    if (scrollPosition > 1) {
      header.style.backgroundColor = 'red';
    } else {
      header.style.backgroundColor = 'var(--body-color)';
    }
  });


