@extends('Layouts.master')
@section('content')

  <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img src="{{ asset('images/s6.png') }}" alt="Fruit Basket" class="img-fluid rounded mx-auto d-block" style="max-height: 400px;" />
            </div>
            <div class="col-md-6">
              <div class="text-start">
                <h1 style="color:black;">Fresh & Quality Fruits</h1>
                <p>We provide the freshest & quality fruits sourced directly from local farms. Carefully harvested at peak ripeness, our produce delivers exceptional flavor and nutrition.</p>
                <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img src="{{ asset('images/s5.png') }}" alt="Customer Service" class="img-fluid rounded mx-auto d-block" style="max-height: 400px;" />
            </div>
            <div class="col-md-6">
              <div class="text-start">
                <h1 style="color:black;">Providing Quality Service</h1>
                <p>We are committed to delivering exceptional service to every customer with attention to detail, personalized care, and reliable support.</p>
                <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img src="{{ asset('images/s3.png') }}" alt="Delivery" class="img-fluid rounded mx-auto d-block" style="max-height: 400px;" />
            </div>
            <div class="col-md-6">
              <div class="text-start">
                <h1 style="color:black;">Delivery Services</h1>
                <p>Our fast and reliable delivery ensures your orders arrive fresh and on time with real-time tracking and careful handling.</p>
                <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <hr class="my-5"/>

  <div class="container">
    <h2 class="text-center text-success mb-4">Core Features</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <h5 class="card-title">📦 Inventory Management</h5>
            <p class="card-text">Track fruit stock, update quantities, and view inventory in real time.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <h5 class="card-title">🧾 Billing System</h5>
            <p class="card-text">Create accurate bills instantly and reduce errors from manual entry.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <h5 class="card-title">📊 Sales Reports</h5>
            <p class="card-text">View sales summaries by day, week, or month to understand business performance.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="my-5"/>

  <section id="sec2">
    <div class="container text-center">
      <h2 class="mb-4">Why Choose Our System?</h2>
      <p class="fs-5">
        Many fruit shop owners still rely on handwritten notes and basic calculators. Our system transforms how small businesses operate by saving time, reducing mistakes, and making everything more organized — from fruit stock to customer billing.
      </p>
      <p class="fs-5">It's simple, fast, and built especially for Sri Lankan fruit vendors.</p>
    </div>
  </section>

  <hr class="my-5"/>
@endsection
  
 