<section id="team">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Our Team</h3>
        <div class="section-title-divider"></div>
        <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="member">
          <div class="pic"><img src="{{$team ? asset('storage/'.$team->image) : 'img/team-1.jpg'}}" alt=""></div>
          <h4>{{$team ? $team->nom : 'Walter White'}}</h4>
          <span>{{$team ? $team->poste : 'Chief Executive Officer'}}</span>
          <div class="social">
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-google-plus-g"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>