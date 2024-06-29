
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const leftButton = document.querySelector('.nav-button.left');
        const rightButton = document.querySelector('.nav-button.right');
        let index = 0;
        const totalSlides = slides.length;
        
        function showSlide(i) {
            index = (i + totalSlides) % totalSlides;
            slider.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextSlide() {
            showSlide(index + 1);
        }

        function prevSlide() {
            showSlide(index - 1);
        }

        rightButton.addEventListener('click', nextSlide);
        leftButton.addEventListener('click', prevSlide);

        setInterval(nextSlide, 5000); // Change slide every 5 seconds
