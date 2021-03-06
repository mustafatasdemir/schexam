<!doctype html>
<html lang="en">
<head>
  @include('includes.intro.head')
</head>
<body>
  <header>
    @include('includes.intro.header')
  </header>

  <!-- start preloader -->
  <div class="preloader">
    <div class="sk-spinner sk-spinner-rotating-plane"></div>
  </div>
  <!-- end preloader -->

  <!-- start navigation -->
  <nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">{{ trans('site.app') }}</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right text-uppercase">
          <li><a href="#home">{{ trans('intro.navbar.home') }}</a></li>
          <li><a href="#feature">{{ trans('intro.navbar.features') }}</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#download">Download</a></li>
          <li><a href="#contact">{{ trans('intro.navbar.contact') }}</a></li>
          <li><a onclick="window.location.href='{{ url('/login') }}'" href="{{ url('/login') }}">{{ trans('intro.navbar.login') }}</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navigation -->
  <!-- start home -->
  <section id="home">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="text-upper">Software Landing Page</h1>
            <p class="tm-white">Boxer is a fully Responsive, Clean Design, Modern, and Flexible Software Landing Page for startups, businesses and agencies. It is built with HTML5 &amp; CSS3, Bootstrap 3.3.4, Font Awesome 4.3.0, and much more. Designed by <a rel="nofollow" href="http://www.facebook.com/templatemo" target="_parent">templatemo</a>. Images by <a rel="nofollow" href="http://pixabay.com" target="_blank">Pixabay</a></p>
            <img src="{{ URL::asset('img/intro/software-img.png') }}" class="img-responsive" alt="home img">
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- end home -->
  <!-- start divider -->
  <section id="divider">
    <div class="container">
      <div class="row">
        <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
          <i class="fa fa-laptop"></i>
          <h3 class="text-uppercase">RESPONSIVE LAYOUT</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
        </div>
        <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
          <i class="fa fa-twitter"></i>
          <h3 class="text-uppercase">BOOTSTRAP 3.3.4</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
        </div>
        <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
          <i class="fa fa-font"></i>
          <h3 class="text-uppercase">GOOGLE FONT</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
        </div>
      </div>
    </div>
  </section>
  <!-- end divider -->

  <!-- start feature -->
  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
          <h2 class="text-uppercase">Our Software Features</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p><span><i class="fa fa-mobile"></i></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p><i class="fa fa-code"></i>Quis autem velis reprehenderit et quis voluptate velit esse quam.</p>
        </div>
        <div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
          <img src="{{ URL::asset('img/intro/software-img.png') }}" class="img-responsive" alt="feature img">
        </div>
      </div>
    </div>
  </section>
  <!-- end feature -->

  <!-- start feature1 -->
  <section id="feature1">
    <div class="container">
      <div class="row">
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
          <img src="{{ URL::asset('img/intro/software-img.png') }}" class="img-responsive" alt="feature img">
        </div>
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
          <h2 class="text-uppercase">More of Your Software</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p><span><i class="fa fa-mobile"></i></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p><i class="fa fa-code"></i>Quis autem velis reprehenderit et quis voluptate velit esse quam.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end feature1 -->

  <!-- start pricing -->
  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="col-md-12 wow bounceIn">
          <h2 class="text-uppercase">Our Pricing</h2>
        </div>
        <div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
          <div class="pricing text-uppercase">
            <div class="pricing-title">
              <h4>Basic Plan</h4>
              <p>$11</p>
              <small class="text-lowercase">monthly</small>
            </div>
            <ul>
              <li>6 GB Space</li>
              <li>600 GB Bandwidth</li>
              <li>60 More Themes</li>
              <li>Lifetime Support</li>
            </ul>
            <button class="btn btn-primary text-uppercase">Sign up</button>
          </div>
        </div>
        <div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
          <div class="pricing active text-uppercase">
            <div class="pricing-title">
              <h4>Business Plan</h4>
              <p>$22</p>
              <small class="text-lowercase">monthly</small>
            </div>
            <ul>
              <li>15 GB space</li>
              <li>1,500 GB Bandwidth</li>
              <li>150 More Themes</li>
              <li>Lifetime Support</li>
            </ul>
            <button class="btn btn-primary text-uppercase">Sign up</button>
          </div>
        </div>
        <div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
          <div class="pricing text-uppercase">
            <div class="pricing-title">
              <h4>Pro Plan</h4>
              <p>$33</p>
              <small class="text-lowercase">monthly</small>
            </div>
            <ul>
              <li>35 GB space</li>
              <li>3,500 GB bandwidth</li>
              <li>350 more themes</li>
              <li>Lifetime Support</li>
            </ul>
            <button class="btn btn-primary text-uppercase">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end pricing -->

  <!-- start download -->
  <section id="download">
    <div class="container">
      <div class="row">
        <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
          <h2 class="text-uppercase">Download Our Software</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
          <button class="btn btn-primary text-uppercase"><i class="fa fa-download"></i> Download</button>
        </div>
        <div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
          <img src="{{ URL::asset('img/intro/software-img.png') }}" class="img-responsive" alt="feature img">
        </div>
      </div>
    </div>
  </section>
  <!-- end download -->

  <!-- start contact -->
  <section id="contact">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <h2 class="text-uppercase">{{ trans('intro.contact.title') }}</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
            <address>
              <p><i class="fa fa-map-marker"></i> {{ trans('intro.contact.address') }}</p>
              <p><i class="fa fa-phone"></i> {{ trans('intro.contact.phone') }}</p>
              <p><i class="fa fa-envelope-o"></i> {{ trans('intro.contact.contact_email') }}</p>
            </address>
          </div>
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="contact-form">
              <form action="#" method="post">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="{{ trans('intro.contact.name') }}">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="{{ trans('intro.contact.email') }}">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="{{ trans('intro.contact.subject') }}">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" placeholder="{{ trans('intro.contact.message') }}" rows="4"></textarea>
                </div>
                <div class="col-md-8">
                  <input type="submit" class="form-control text-uppercase" value="{{ trans('intro.contact.send') }}">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact -->

  <footer id="bottom_footer">
    @include('includes.intro.footer')
  </footer>
</body>
</html>
