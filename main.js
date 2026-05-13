const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav');

burger.addEventListener('click', function () {
nav.classList.toggle('active');
});

window.addEventListener('scroll', function () {

const header = document.querySelector('.header');

if(window.scrollY > 50) {
    header.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
}

else {
    header.style.boxShadow = 'none';
}

});

const reveals = document.querySelectorAll('.reveal');

window.addEventListener('scroll', revealSections);

function revealSections() {

reveals.forEach(function(section) {

    const sectionTop = section.getBoundingClientRect().top;

    const windowHeight = window.innerHeight;

    if(sectionTop < windowHeight - 100) {
        section.classList.add('active');
    }

});

}

revealSections();

const counters=document.querySelectorAll('.counter');

let started=false;

window.addEventListener('scroll',()=>{

const statsSection=document.querySelector('.stats');

const sectionTop=statsSection.offsetTop;

if(window.scrollY>sectionTop-500 && !started){

counters.forEach(counter=>{

const updateCounter=()=>{

const target=+counter.getAttribute('data-target');
const current=+counter.innerText;

const increment=target/100;

if(current<target){

counter.innerText=Math.ceil(current+increment);

setTimeout(updateCounter,20);

}

else{
counter.innerText=target;
}

};

updateCounter();

});

started=true;

}

});



