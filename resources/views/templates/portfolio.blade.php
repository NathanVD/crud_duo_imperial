<section id="portfolio">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Portfolio</h3>
        <div class="section-title-divider"></div>
        <p class="section-description">{{$captions ? $captions->portfolio : 'Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse'}}</p>
      </div>
    </div>

    <div class="row">
      @if ($portfolios->isEmpty())
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-1.jpg);" href="">
            <div class="details">
              <h4>Portfolio 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-2.jpg);" href="">
            <div class="details">
              <h4>Portfolio 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-3.jpg);" href="">
            <div class="details">
              <h4>Portfolio 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-4.jpg);" href="">
            <div class="details">
              <h4>Portfolio 4</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-5.jpg);" href="">
            <div class="details">
              <h4>Portfolio 5</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-6.jpg);" href="">
            <div class="details">
              <h4>Portfolio 6</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-7.jpg);" href="">
            <div class="details">
              <h4>Portfolio 7</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-8.jpg);" href="">
            <div class="details">
              <h4>Portfolio 8</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>
      @else
        @foreach ($portfolios as $portfolio)
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url({{asset('storage/'.$portfolio->img)}});" href="">
              <div class="details p-1">
                <h4>{{$portfolio->nom}}</h4>
                <span>{{$portfolio->description}}</span>
              </div>
              {{-- <img src="{{asset('storage/'.$portfolio->img)}}" class="img-fluid" alt=""> --}}
            </a>
          </div>
        @endforeach  
      @endif
    </div>

  </div>
</section>