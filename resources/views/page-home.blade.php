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
        <p data-aos="fade-in">Pogledajte neke od mojih nedavnih projekata kako biste
          stekli uvid u proces, rezultate i iskustva klijenata.
          </p>
      </div>
   </div>
  </div>
  {{-- <div class="home__landingArrow">
    <span></span>
  </div> --}}
</section>

<section class="portfolio-wrapp">
 <div class="container-lg">
   <ul class="portfolio-grid">
     <li class="portfolio-grid__item" data-aos="slide-up" data-aos-duration="1000" data-aos-delay="50">
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

      <li class="portfolio-grid__item" data-aos="slide-up" data-aos-duration="1000" data-aos-delay="50">
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

     <li class="portfolio-grid__item" data-aos="slide-up" data-aos-duration="1000">
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

      <li class="portfolio-grid__item" data-aos="slide-up" data-aos-duration="1000">
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

   <div class="d-flex justify-content-center el-wrapp"  data-aos="fade-in">
     <a href="#" class="btn btn--border">Istražite usluge</a>
   </div>
          
  </div>

  <div class="home-circle__text1">
    <svg class="home-circle-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500">
  <title>Home circle1</title>
<defs>
	<path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle">
		<animateTransform
            attributeName="transform"
            begin="0s"
            dur="30s"
            type="rotate"
            from="0 250 250"
            to="360 250 250"
            repeatCount="indefinite" 
			/>
	</path>
</defs>
	<text dy="70" textLength="1220">
		<textPath xlink:href="#textcircle">Scroll - Još malo - do kraja - stranice -</textPath>
	</text>
</svg>
  </div>

</section>

<section class="home-about">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading-border" data-aos="slide-right" data-aos-duration="1000">
         Fokus, predanost, podrška
        </h3>
      </div>
      <div class="col-md-6">
       <div class="page-text" data-aos="fade-in" data-aos-delay="150" data-aos-duration="1000">
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
        <h3 class="heading-border heading-border--light" data-aos="slide-right" data-aos-duration="1000">
         Česta pitanja klijenata
        </h3>
      </div>
      <div class="col-md-6">
        <div class="accordion" data-aos="slide-up" data-aos-delay="250" data-aos-duration="1500">
          <div class="accordion-item">
            <button id="accordion-button-1" aria-expanded="false">
              <span class="accordion-title">Kolika je cijena izrade web stranica?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Koliko traje razvoj web stranice?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Trebam li imati gotov dizajn web stranice?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Pružate li podršku nakon izrade web stranice?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Samostalno administriranje web stranice?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>

          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Usluga domene, hostinga web stranice?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>

          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Marketing, društvene mreže, logotipi?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <div class="home-circle__text2">
    <svg class="home-circle-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500">
  <title>Home circle2</title>
<defs>
	<path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle2">
		<animateTransform
            attributeName="transform"
            begin="0s"
            dur="30s"
            type="rotate"
            from="0 250 250"
            to="360 250 250"
            repeatCount="indefinite" 
			/>
	</path>
</defs>
	<text dy="70" textLength="1220">
		<textPath xlink:href="#textcircle">Vi ste na redu - Vi ste na redu - Kontakt -</textPath>
	</text>
</svg>
  </div>
</section>

<section class="cta cta-light">
  <div class="cta-light__content">
    <h3 class="cta-light__heading">Imate projekt na umu, trebate savjet?</h3>
  </div>
  <div class="d-flex justify-content-center mt-4">
    <a href="#" class="btn btn--border">Pokrenimo priču</a>
  </div>
</section>
 
@endsection
