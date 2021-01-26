{{-- Template name: Home --}}

@extends('layouts.app')

@section('content')
 <section class="portfolio__hero-section">
   <div class="container-xl">
   <div class="hero-section__content d-flex flex-column justify-content-center">
    <h3 class="heading__hero--small">Portfolio  <span class="heading__hero--small-text">Izrada web stranica</span></h3>
     <h2 class="heading__hero"><span>Pozdrav, <span class="heading__hero-line">ja sam Alen.</span> Web developer</span>
     <span>iz Rijeke specijaliziran za dizajn i kodiranje</span>
      web stranica.</h2>

      <div class="hero-section__content-text">
        <p class="lead">Pogledajte neke od mojih nedavnih projekata kako biste
          stekli uvid u proces, rezultate i iskustva klijenata.
          </p>
      </div>
   </div>
  </div>
</section>

<section class="portfolio-wrapp">
 <div class="container-lg">
   <ul class="portfolio-grid">
     <li class="portfolio-grid__item">
       <a href="" class="portfolio-grid__item-link">
         <div class="portfolio-grid__item-img">
          <img src="@asset("images/brandier-ex.jpg")" alt="">
         </div>
       </a>
       <div class="portfolio-grid__item-desc">
         <h3 class="portfolio-grid__item-title">Grad Kastav</h3>
         <p class="portfolio-grid__item-excerpt">Razvoj službenih web stranica Grada Kastva</p>
       </div>
     </li>

      <li class="portfolio-grid__item">
       <a href="" class="portfolio-grid__item-link">
         <div class="portfolio-grid__item-img">
          <img src="@asset("images/kastav-ex.jpg")" alt="">
         </div>
       </a>
       <div class="portfolio-grid__item-desc">
         <h3 class="portfolio-grid__item-title">Brandier</h3>
         <p class="portfolio-grid__item-excerpt">Izrada web stranice digitalne agencije</p>
       </div>
     </li>

     <li class="portfolio-grid__item">
       <a href="" class="portfolio-grid__item-link">
         <div class="portfolio-grid__item-img">
            <img src="@asset("images/kastav-ex.jpg")" alt="">
         </div>
         
       </a>
       <div class="portfolio-grid__item-desc">
         <h3 class="portfolio-grid__item-title">Grad Kastav</h3>
         <p class="portfolio-grid__item-excerpt">Razvoj službenih web stranica Grada Kastva</p>
       </div>
     </li>

      <li class="portfolio-grid__item">
       <a href="" class="portfolio-grid__item-link">
         <div class="portfolio-grid__item-img">
          <img src="@asset("images/brandier-ex.jpg")" alt="">
         </div>
          
       </a>
       <div class="portfolio-grid__item-desc">
         <h3 class="portfolio-grid__item-title">Brandier</h3>
         <p class="portfolio-grid__item-excerpt">Izrada web stranice digitalne agencije</p>
       </div>
     </li>
   </ul>
          
  </div>

  
</section>
 
  
   
 </div>
@endsection
