{{-- Template name: About --}}

@extends('layouts.app')

@section('content')
 <section class="portfolio__hero-section">
   <div class="container-xl">
   <div class="hero-section__content d-flex flex-column justify-content-center">
    <h3 class="heading__hero--small">Portfolio  <span class="heading__hero--small-text">O meni</span></h3>
     <h2 class="heading__hero"><span>Pozdrav, ja sam Alen Barać, full time freelance <span class="heading__hero-line">web developer.</span></span>
    </h2>

      <div class="hero-section__content-text">
        <p data-aos="fade-in">
          Trenutno živim u Kastvu gdje svakodnevno dizajniram, kodiram i
surađujem s klijentima. Kada ne radim to, većinu vremena učim nove
tehnologije u svijetu dizajna i web programiranja.
          </p>
      </div>
   </div>
  </div>
  {{-- <div class="home__landingArrow">
    <span></span>
  </div> --}}
</section>


<section class="about-desc">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading-border" data-aos="slide-right" data-aos-duration="1000">
          Freelance, agencija, full time freelance.
        </h3>
      </div>
      <div class="col-md-6">
       <div class="page-text" data-aos="fade-in" data-aos-delay="150" data-aos-duration="1000">
         <p>
          Sve je krenulo prije 7 godina kada sam na posljednjoj godini faxa
          otkrio da me zanima web programiranje.  Jedna edukacija je vodila
          drugoj i nekako sam se zatekao da radim na prvom web projektu
          za klijenta. Nekoliko projekata kasnije zapošljavam se u digitalnoj
          agenciji. Ovdje sam u 3 godine stekao iskustvo u dizajnu, vođenju
          projekata, programiranju, komunikaciji s klijentima i suradnicima.
         </p>
         <p>
          S obzirom na raznoliko stečeno iskustvo, smatrao sam da je
          vrijeme da započnem svoj samostalni posao. I evo nas,
          posljednje 3 godine razvijam manje i veće web projekte
          uz povremenu suradnju s par digitalnih agencija.
          
         </p>
       </div>
      </div>
    </div>
  </div>
  <div class="home-faq">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-6">
          <h3 class="heading-border heading-border--dark" data-aos="slide-right" data-aos-duration="1000">
           Što vam mogu ponuditi?
          </h3>
        </div>
        <div class="col-md-6">
          <div class="accordion" data-aos="slide-up" data-aos-delay="250" data-aos-duration="1500">
            <div class="accordion-item">
              <button id="accordion-button-1" aria-expanded="false">
                <span class="accordion-title">Dizajn web stranica</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Programiranje web stranica</span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Razvoj web trgovina</span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Održavanje web stranica</span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Savjetovanje</span><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="cta cta-light">
  <div class="cta-light__content d-flex justify-content-around">
    <h3 class="cta-light__heading" data-aos="fade-in" data-aos-duration="1000">Imate projekt na umu, trebate savjet?</h3>
     <a href="#" class="btn btn--border">Pokrenimo priču</a>
  </div>
</section>
 
@endsection
