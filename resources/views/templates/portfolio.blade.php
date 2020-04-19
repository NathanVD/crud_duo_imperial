<section id="portfolio">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Portfolio</h3>
        <div class="section-title-divider"></div>
        <p class="section-description">Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
      </div>
    </div>

    @foreach ($portfolios as $portfolio)
    <div class="row">
      <div class="col-md-3">
        <a class="portfolio-item" style="background-image: url(img/portfolio-1.jpg);" href="">
          <div class="details">
            <h4>Portfolio 1</h4>
            <span>Alored dono par</span>
          </div>
          <img src="{{asset($portfolio->img)}}" class="img-fluid" alt="">
        </a>
      </div>
    </div>
    @endforeach


  </div>
</section>