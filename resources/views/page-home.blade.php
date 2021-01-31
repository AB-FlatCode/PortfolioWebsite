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
        <p>Pogledajte neke od mojih nedavnih projekata kako biste
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

   <div class="d-flex justify-content-center el-wrapp">
     <a href="#" class="btn btn--border">Istražite</a>
   </div>
          
  </div>

</section>

<section class="home-about">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading-border">
         Fokus, predanost, podrška
        </h3>
      </div>
      <div class="col-md-6">
       <div class="page-text">
         <p>
            Ako tražite individualni pristup, predanost projektu i stvaranje 
            dugoročnih poslovnih odnosa nabasali ste na pravo mjesto.
            Ono što meni dobro ide jest osmišljavanje i razvoj web stranica 
            raznih namjena, njihovo održavanje i priprema za digitalni
            marketing.
         </p>
         <p>
            Najugodnije se osjećam u radu s malim i srednjim poduzetnicima,
            kreativcima i  ostalim nodobudnicima. Još bolje ako su direktni,
            imaju dobru energiju i veliku želju osmisliti skupa samnom nekakav 
            moderan i funkcionalan web. Cca 9 od 10 puta i ispadne tako.
         </p>
       </div>
      </div>
    </div>
  </div>
</section>

<section class="home-services">
  <div class="text-slider">
    <div class="skills">    
      Dizajn web stranica • Web development • Izrada web trgovina • Održavanje web stranica • Podrška • Konzalting 
    </div>
  </div>
<div class="home-faq">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading-border heading-border--light">
         Česta pitanja klijenata
        </h3>
      </div>
      <div class="col-md-6">
        <div class="accordion-wrapp">
          <div class="accordion-toggle" data-collapse="">
            <div class="accordion-block">
              <div class="accordion-num">01</div>
              <div class="accordion-title">Kolika je cijena izrade web stranica?</div>
              <div class="accordion-icon"><span>+</span></div>
            </div>
          </div>
          <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptatibus exercitationem voluptatem corporis officia quae, earum omnis velit at corrupti?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptatibus exercitationem voluptatem corporis officia quae, </p>
          </div>

          <div class="accordion-toggle" data-collapse="">
            <div class="accordion-block">
              <div class="accordion-num">02</div>
              <div class="accordion-title">Koliko traje razvoj web stranice?</div>
              <div class="accordion-icon"><span>+</span></div>
            </div>
          </div>
          <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptatibus exercitationem voluptatem corporis officia quae, earum omnis velit at corrupti?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptatibus exercitationem voluptatem corporis officia quae, </p>
          </div>

          <div class="accordion-toggle" data-collapse="">
            <div class="accordion-block">
              <div class="accordion-num">03</div>
              <div class="accordion-title">Trebam li imati gotov dizajn web stranice?</div>
              <div class="accordion-icon"><span>+</span></div>
            </div>
          </div>
          <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptatibus exercitationem voluptatem corporis officia quae, earum omnis velit at corrupti?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptatibus exercitationem voluptatem corporis officia quae, </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</section>
 
@endsection
