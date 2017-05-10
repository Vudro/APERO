<div class="row">
    <div class="twelve columns">
        <h1 class="text-center">Bienvenue sur le logiciel Apero</h1>
    </div>
</div>


<div class="row">
    <div class="twelve columns">
        <ul id="slides">
            <?php foreach ($creations as $k => $d) {?>
                <li class="slide <?php if($k == 0){ echo 'showing';} ?>">
                    <img class="img-responsive" src="<?php echo URL_INC_IMG.'upload/'.$d['img_url']; ?>">
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<div class="row">
    <div class="eight columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta semper urna, ornare faucibus velit facilisis vel. Curabitur venenatis nulla vel magna pretium at fringilla felis pharetra. Morbi vehicula sem ut nisl condimentum sed consectetur purus pulvinar. Fusce urna enim, posuere quis egestas id, cursus eu leo. Morbi ornare tempus lacus eget accumsan. Mauris turpis nisi, sodales eget vestibulum sit amet, scelerisque et lectus. Donec quis nisl ut libero tristique adipiscing. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In consectetur neque vel eros suscipit non semper quam ultrices. Praesent sodales condimentum sollicitudin. Nam molestie euismod diam a mattis. Nam vitae odio augue, nec venenatis felis. Vestibulum nisi justo, elementum id sodales in, fringilla vitae augue.</p>
    </div>
    <div class="four columns">
        <img class="img-responsive" src="http://placehold.it/350x150">
    </div>
</div>

<div class="row">
    <div class="twelve columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta semper urna, ornare faucibus velit facilisis vel. Curabitur venenatis nulla vel magna pretium at fringilla felis pharetra. Morbi vehicula sem ut nisl condimentum sed consectetur purus pulvinar. Fusce urna enim, posuere quis egestas id, cursus eu leo. Morbi ornare tempus lacus eget accumsan. Mauris turpis nisi, sodales eget vestibulum sit amet, scelerisque et lectus. Donec quis nisl ut libero tristique adipiscing. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In consectetur neque vel eros suscipit non semper quam ultrices. Praesent sodales condimentum sollicitudin. Nam molestie euismod diam a mattis. Nam vitae odio augue, nec venenatis felis. Vestibulum nisi justo, elementum id sodales in, fringilla vitae augue.</p>
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