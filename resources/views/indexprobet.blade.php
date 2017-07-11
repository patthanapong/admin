@extends('probet.masterprobet')
@section('content')
    

    <div class="row">

        {{-- <div class="col-3 col-s-3 menu">
            
        </div> --}}

            {{-- <div class="col-9 col-s-9"> --}}
                <h1>Casino online</h1>
                
                {{-- <img src="/DataTemplate/image/casino.jpg" width="460" height="345"> --}}
            {{-- </div> --}}
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                    <img src="/DataTemplate/image/casino.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                    <img src="/DataTemplate/image/dice.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                    <img src="/DataTemplate/image/casino2.png" style="width:96%">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
<br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>

                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                    showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                    showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                    }
                </script>
            

        <div class="col-3 col-s-12">
            <div class="aside">
                <h2>What?</h2>
                <p>Chania is a city on the island of Crete.</p>
                <h2>Where?</h2>
                <p>Crete is a Greek island in the Mediterranean Sea.</p>
                <h2>How?</h2>
                <p>You can reach Chania airport from all over Europe.</p>
            </div>
        </div>

        <div class="col-3 col-s-12">
            <div class="aside">
                <h2>What?</h2>
                <p>Chania is a city on the island of Crete.</p>
                <h2>Where?</h2>
                <p>Crete is a Greek island in the Mediterranean Sea.</p>
                <h2>How?</h2>
                <p>You can reach Chania airport from all over Europe.</p>
            </div>
        </div>

           <div class="col-3 col-s-12">
            <div class="aside">
                <h2>What?</h2>
                <p>Chania is a city on the island of Crete.</p>
                <h2>Where?</h2>
                <p>Crete is a Greek island in the Mediterranean Sea.</p>
                <h2>How?</h2>
                <p>You can reach Chania airport from all over Europe.</p>
            </div>
        </div>

           <div class="col-3 col-s-12">
            <div class="aside">
                <h2>What?</h2>
                <p>Chania is a city on the island of Crete.</p>
                <h2>Where?</h2>
                <p>Crete is a Greek island in the Mediterranean Sea.</p>
                <h2>How?</h2>
                <p>You can reach Chania airport from all over Europe.</p>
            </div>
        </div>
        

            
    </div>

 
@endsection