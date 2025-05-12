const btnLeft = document.querySelector(".btn-left");
const btnRight = document.querySelector(".btn-right");
const slider = document.querySelector(".carruseles");
const sliderSections = document.querySelectorAll(".slider-section");

let currentIndex = 0;
const totalSections = sliderSections.length;

function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}

btnLeft.addEventListener("click", () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalSections - 1;
    updateSlider();
});

btnRight.addEventListener("click", () => {
    currentIndex = (currentIndex < totalSections - 1) ? currentIndex + 1 : 0;
    updateSlider();
});
