
function createSlideshow() {
    var hoofdgerechten = document.getElementsByClassName('hoofdgerecht');
    
    Array.from(hoofdgerechten).forEach(function(gerecht) {
        gerecht.style.display = 'none';
    });

    var currentSlide = 0;
    hoofdgerechten[currentSlide].style.display = 'block';

    function nextSlide() {
        hoofdgerechten[currentSlide].style.display = 'none';
        currentSlide = (currentSlide + 1) % hoofdgerechten.length;
        hoofdgerechten[currentSlide].style.display = 'block';
    }

    setInterval(nextSlide, 2000);
}


    createSlideshow();

