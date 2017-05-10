<div class="row">
    <div class="twelve columns">
        <h1 class="text-center">Bienvenue sur le logiciel Apero</h1>
    </div>
</div>

<div class="row">
    <div class="twelve columns">
        <h4>Première période</h4>
        <button class="button-primary" type="button">Ajouter un livre</button>
        <button class="button-primary" type="button">Ajouter un livre à une classe</button>
    </div>
    <div class="twelve columns">
        <h4>Seconde période</h4>
        <button class="button-primary" type="button">Ajouter un livre</button>
        <button class="button-primary" type="button">Ajouter un livre à une classe</button>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var slides = document.querySelectorAll('#slides .slide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide, 3000);

        function nextSlide() {
            slides[currentSlide].className = 'slide';
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].className = 'slide showing';
        }
    });
</script>