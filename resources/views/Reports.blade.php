<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Reports - Fruit Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style4.css"/>
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
          <li class="nav-item"><a class="nav-link" href="{{ url('Billing')}}">Billing</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ url('Reports')}}">Reports</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('Login')}}">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-5">
    <h2 class="text-success mb-4">Sales Reports</h2>

    <div class="card mb-4 p-3 shadow-sm">
      <form class="row g-3">
        <div class="col-md-4">
          <label for="reportType" class="form-label">Report Type</label>
          <select class="form-select" id="reportType">
            <option selected>Daily</option>
            <option>Weekly</option>
            <option>Monthly</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="date" class="form-label">Select Date</label>
          <input type="date" class="form-control" id="date" required />
        </div>
        <div class="col-md-4 d-grid align-self-end">
          <button type="submit" class="btn btn-success">Generate Report</button>
        </div>
      </form>
    </div>

    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title mb-3">Sales Summary</h5>
        <table class="table table-bordered table-hover">
          <thead class="table-success">
            <tr>
              <th>#</th>
              <th>Fruit</th>
              <th>Quantity Sold (kg)</th>
              <th>Total Sales (Rs)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Banana</td>
              <td>50</td>
              <td>4,000</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Apple</td>
              <td>30</td>
              <td>7,500</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Orange</td>
              <td>20</td>
              <td>3,000</td>
            </tr>
          </tbody>
        </table>
        <p class="text-end fw-bold">Total Sales: Rs. 14,500</p>
      </div>
    </div>
  </div>

  <footer class="bg-light text-center p-3 mt-5">
    <p class="mb-0">&copy; 2025 Fruit Shop Management System</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
