    document.addEventListener("DOMContentLoaded", function() {
        const prevButton = document.querySelector(".prev-buttonn");
        const nextButton = document.querySelector(".next-buttonn");
        const carNewsContainer = document.querySelector(".car-news-container");
        const carNewsItems = document.querySelectorAll(".car-news");

        let currentIndex = 0;
        const slideWidth = carNewsItems[0].offsetWidth;
        const totalSlides = carNewsItems.length;

        function goToSlide(index) {
            carNewsContainer.style.transform = `translateX(-${index * slideWidth}px)`;
        }

        function updateButtons() {
            prevButton.disabled = currentIndex === 0;
            nextButton.disabled = currentIndex === totalSlides - 1;
        }

        prevButton.addEventListener("click", function() {
            if (currentIndex > 0) {
                currentIndex--;
                goToSlide(currentIndex);
                updateButtons();
            }
        });

        nextButton.addEventListener("click", function() {
            if (currentIndex < totalSlides - 1) {
                currentIndex++;
                goToSlide(currentIndex);
                updateButtons();
            }
        });

        updateButtons();
    });