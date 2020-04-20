<section id="team">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Our Team</h3>
        <div class="section-title-divider"></div>
        <p class="section-description">{{$captions ? $captions->team : 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque'}}</p>
      </div>
    </div>

    <div class="row">
      @if (!$team->isEmpty())
        @foreach ($team as $team_member)
          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="{{asset('storage/'.$team_member->image)}}" alt=""></div>
              <h4>{{$team_member->nom}}</h4>
              <span>{{$team_member->poste}}</span>
              <div class="social">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-google-plus-g"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
            <h4>Sarah Jhinson</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-google-plus-g"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
            <h4>William Anderson</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-google-plus-g"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-google-plus-g"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
</section>