<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="uko6vLzEPHyxgUmkE3ijYv9PZ8kJxsc1Z0izR6WXx80" />
<link rel="stylesheet" href="../css/index.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
<script defer type="module" src="../js/home.js"></script>
    <title>Jamaica Eternal Tours</title>

</head>
<body>
    <!-- Preloader -->
    @include("layouts.preloader")
    <!-- Header Component -->
    @include("layouts.header")

    <main>
        <!-- Video Component -->
        <section class="section-bgvideo">
            <div class="video-wrapper">
                 <video muted loop autoplay>
                <source src="../videos/jm.mp4" type="video/mp4">
            </video>
            </div>
           
        </section>

        <!-- Features Component -->
        @include("layouts.features")
        <!-- Reviews Component -->
        <section class="section-reviews">
        
        </section>
        <!-- Cards Component -->
        <section class="section-cards">
            <h2>Popular Tours</h2>
    <div class="cards">
    @foreach (json_decode($cards) -> cards as $card)

        <div class=" cards__card">
            <a href="/book?selectedForm=tours">
            <div class="cards__card__image-wrapper">
            <img class="cards__card__image" src="{{$card->path}}" alt="{{ $card->name }}">
        </div>
            </a>
            <div class="card-btm">
                <h3 class="card-btm__heading">{{ $card->name }}</h3>
                <p class="card-btm__price">Price {{ $card->price }} USD (per person)</p>
                <div class="card-buttons-wrapper">
                <a id="book-btn"class="card-btm__button" href="/book?selectedForm=tours">Book</a>     
                 </div>

            </div>
            </div>

            @endforeach
          

</div>
</section>
<section class="section-sub-content">
    <div class="sub-content">
    <h2 class="sub-content__heading">Why book with us</h2>
  <p  class="sub-content__content">  
    With its verdant tropical mountains, enchanting waterfalls and breathtaking sandy beaches, Jamaica has become a famous tourist destination. A tour in Jamaica with us is unlike anything you’ve ever experienced.
    Whether you want to swim with dolphins, glide through a canopy of exotic trees on a zip line or scale gorgeous waterfalls... We've got your back.
</p>
</div>
</section>
<!-- Gallery Component -->
<section class="section-gallery">
    <h2 style="font-size:3.5rem;text-align:left;color:#f39c12; margin-top:10rem;">Gallery</h2>
    <div class="gallery">
    <img src="../img/martha-brae.jpg" alt="Martha Brae Jamaica">
    <img src="../img/horse-riding.jpg" alt="Dunns River Jamaica">
    <img src="../img/negril.jpg" alt="Negril Beach Jamaica">
    <img src="../img/blue-mountain-opt.jpg" alt="Blue Mountain Jamaica">
    <img src="../img/blue-hole.jpg" alt="Blue Hole Jamaica">
    <img src="../img/dolphincove.jpg" alt="Dolphin Cove Jamaica">
    <img src="../img/rose-hall.jpg" alt="Rose Hall Jamaica">
    <img src="../img/chukka-atv.jpg" alt="Chukka Atv">

</div>
</section>
    </main>
    @include("layouts.footer")

    <script>
        
        window.addEventListener("load",removeLoader ) 
         function removeLoader(){
          const preloader = document.querySelector(".preloader");
          preloader.style.display = "none"
         }
          
         
      </script>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/604faa3cf7ce1827093054f0/1f0rj1v11';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>