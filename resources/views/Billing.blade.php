<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Billing - S & S Fruit Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style5.css" />
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">Fruit Shop</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ url('home')}}">home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('Dashboard')}}">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('Stock')}}">Stock</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ url('Billing')}}">Billing</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('Reports')}}">Reports</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('Login')}}">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-5">
    <h2 class="text-success mb-4">Create Bill</h2>

    <div class="card p-4 mb-4 shadow-sm">
      <form class="row g-3">
        <div class="col-md-4">
          <label for="fruit" class="form-label">Select Fruit</label>
          <select class="form-select" id="fruit">
            <option selected>Choose...</option>
            <option>Banana</option>
            <option>Apple</option>
            <option>Orange</option>
            <option>Guava</option>
            <option>Papaya</option>
            <option>Avacado</option>
          </select>
        </div>

        <div class="col-md-3">
          <label for="quantity" class="form-label">Quantity (kg)</label>
          <input type="number" class="form-control" id="quantity" required />
        </div>

        <div class="col-md-3">
          <label for="price" class="form-label">Price per kg (Rs)</label>
          <input type="number" class="form-control" id="price" required />
        </div>

        <div class="col-md-2 d-grid align-self-end">
          <button type="button" class="btn btn-success">Add</button>
        </div>
      </form>
    </div>

    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title mb-3">Bill Details</h5>
        <table class="table table-bordered">
          <thead class="table-success">
            <tr>
              <th>#</th>
              <th>Fruit</th>
              <th>Qty (kg)</th>
              <th>Price per kg</th>
              <th>Total (Rs)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        <div class="text-end">
          <button class="btn btn-outline-success">Print Bill</button>
          <button class="btn btn-outline-secondary">Clear</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-light text-center p-3 mt-5">
    <p class="mb-0">&copy; 2025 Fruit Shop Management System</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
