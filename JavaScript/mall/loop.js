

// New 2

// Loop
const loop = (target) => {
    let slide = document.querySelector('.' + target + ' .row');
    let slide_body = document.querySelector('.' + target + ' .container');
    let slides = document.querySelectorAll('.' + target + ' .row .item');
    let slideId;
    const slideWidth = slides[0].clientWidth;
    const windowSize = slide.clientWidth;
    const margin = 0;
    const amount = slides.length;
    let index = 1;
    let speed = 1000; //1s

    // console.log(amount * slideWidth);
    // console.log(windowSize / slideWidth);
    // console.log(windowSize);

    if ((amount * slideWidth) > windowSize) {

        const first_child = slides[0].cloneNode(true);
        const last_child = slides[amount - 1].cloneNode(true);
        const second_child = slides[1].cloneNode(true);
        const third_child = slides[2].cloneNode(true);

        first_child.id = 'first_child.' + target + '';
        last_child.id = 'last-child.' + target + '';

        
        slide.prepend(last_child);
        slide.append(first_child);
        slide.append(second_child);
        slide.append(third_child);
        slides = document.querySelectorAll('.' + target + ' .row .item');


        slide.style.transform = 'translateX(' + (-slideWidth * index - margin) + 'px)';

        // Start slide
        const startSlide = () => {
            slideId = setInterval(() => {
                index++;
                slide.style.transform = 'translateX(' + (-slideWidth * index - margin) + 'px)';
                slide.style.transition = 'transform 0.7s ease-out';
            }, speed);
        }

        // Catch the slide transition event
        slide.addEventListener('transitionend', () => {
            if (index > (amount)) {
                index = 1;
                slide.style.transition = 'none';
                slide.style.transform = 'translateX(' + (-slideWidth * index + -margin + 200) + 'px)';
            }
        })

        startSlide();

        slide_body.addEventListener('mouseenter', () => {
            clearInterval(slideId);
        });

        slide_body.addEventListener('mouseleave', () => {
            startSlide();
        });
    }
}

loop('new-store');
loop('new-product');
loop('featured-store');
loop('featured-product');
