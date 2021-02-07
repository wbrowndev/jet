
<header class="header">
    <div class="burger">
        <div class="burger__stroke"></div>
        <div class="burger__stroke"></div>
        <div class="burger__stroke"></div>
    </div>
    <nav class="header__nav">
        @include("layouts.navigation")  
    </nav>
    <div class="header__content">
        <h1 class="header__content__heading">
           {{ $title }}
        </h1>
        <h2 class="header__content__heading2">We provide world class transportation</h2>
    </div>
</header>