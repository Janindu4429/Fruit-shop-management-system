@extends('Layouts.master')
@section('content')


  <div class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4">
        <img src="{{ asset('images/s1.png') }}" alt="Fruit Basket" class="img-fluid rounded" style="max-width: 400px; max-height: 400px;" />
</div>
      <div class="col-md-6">
        <h2 class="text-success mb-3">About Our System</h2>
        <p>
          The <strong>Fruit Shop Management System</strong> is designed to support small fruit vendors by digitizing their in-shop operations. It provides tools for managing inventory, generating bills, tracking sales, and generating reports — all with a simple and user-friendly interface.
        </p>
        <p>
          Many local fruit shops still rely on manual processes like handwritten invoices and notebooks for inventory. This system helps save time, reduce errors, and simplify business operations.
        </p>
      </div>
    </div>

    <hr class="my-5"/>

    <div class="row">
      <div class="col-md-6 mb-4">
        <h4 class="text-success">🎯 Our Vision</h4>
        <p>To empower small-scale fruit vendors with digital tools that enhance efficiency and accuracy in their daily operations.</p>

        <h4 class="text-success mt-4">🚀 Our Mission</h4>
        <p>To deliver a lightweight, easy-to-use management system tailored for fruit shops, without the complexity of full-scale retail software.</p>
      </div>
      <div class="col-md-6">
        <h4 class="text-success">🔧 System Features</h4>
        <ul>
          <li>Inventory management with real-time updates</li>
          <li>Smart billing with price calculations</li>
          <li>Daily/monthly/annual sales reporting</li>
          <li>User login with role-based access</li>
          <li>Simple and responsive UI</li>
        </ul>
      </div>
    </div>

    <hr class="my-5"/>
      <h1><strong><center>Board Of Directors</center> </strong></h1>
      <div class="row">
  <div class="col-md-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <center><img src="{{ asset('images/1.JPG') }}" alt="Fruit Basket" class="img-fluid rounded" style="max-width: 200px; max-height: 200px;" /></center>
        <p><center><strong>MANAGING DIRECTOR</strong></center></p><br>
        <center>Chandana Pathirana</center>
      </div>
    </div>
  </div>

   <div class="col-md-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <center><img src="{{ asset('images/2.JPG') }}" alt="Fruit Basket" class="img-fluid rounded" style="max-width: 200px; max-height: 200px;" /></center>
        <p><center><strong>DIRECTRESS</strong></center></p><br>
        <center>Janakie Pathirana</center>
      </div>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <center><img src="{{ asset('images/3.JPG') }}" alt="Fruit Basket" class="img-fluid rounded" style="max-width: 200px; max-height: 200px;" /></center>
        <p><center><strong>DIRECTOR</strong></center></p><br>
        <center>Janindu Pathirana</center>
      </div>
    </div>
  </div>
</div>

<hr class="my-5"/>

@endsection
