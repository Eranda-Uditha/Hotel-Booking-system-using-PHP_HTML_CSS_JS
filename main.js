let registerBtn = document.querySelector('#register-btn');
let regisretForm = document.querySelector('.Register-form-container');

let formClose = document.querySelector('#form-close');
let registerClose = document.querySelector('#regiform-close');


let videoBtn = document.querySelectorAll('.vid-btn');

formBtn.addEventListener('click', () => {
    loginForm.classList.add('active');
});

registerBtn.addEventListener('click', () => {
    regisretForm.classList.add('active');
});

formClose.addEventListener('click', () => {
    loginForm.classList.remove('active');
});

registerClose.addEventListener('click', () => {
    regisretForm.classList.remove('active');
});

videoBtn.forEach(btn =>{
    btn.addEventListener('click',() => {
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    })
})

 
var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });