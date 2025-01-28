document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.carousel .slaide');
    const prevButton = document.querySelector('.carousel .prev');
    const nextButton = document.querySelector('.carousel .next');

    let currentIndex = 0;
    const totalSlides = slides.length;
    
    function showSlide(index) {
       
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        
        document.querySelector('.slaides').style.transform = `translateX(-${index * 100}%)`;
        
        slides.forEach((slide, i) => {
            slide.style.opacity = (i === index) ? '1' : '0';
        });

        currentIndex = index;
    }
    
    setInterval(() => {
        showSlide(currentIndex + 1);
    }, 4000); 

    
    prevButton.addEventListener('click', () => {
        showSlide(currentIndex - 1);
    });

    nextButton.addEventListener('click', () => {
        showSlide(currentIndex + 1);
    });

  
    showSlide(currentIndex);
});

// ANIMANDO O SCROOL
document.addEventListener('DOMContentLoaded', function() {
document.querySelectorAll('nav a[href^="#"]').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
      
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop, 
                behavior: 'smooth' 
            });
        }
    });
});
});

// CARREGAR IMAGEM

function mostrar(imagem)
{
    if (imagem.files && imagem.files[0])
    {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#foto')//id <img>
                    .attr('src', e.target.result)
                    .width(170)
        };
        reader.readAsDataURL(imagem.files[0]);
    }
}