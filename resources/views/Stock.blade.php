@extends('Layouts.master')
@section('content')

  <header class="bg-light py-4 shadow-sm">
    <div class="container">
      <h2 class="text-success">Manage Stock</h2>
      <p class="text-muted">Add, update or remove fruits from your inventory</p>
    </div>
  </header>

  <section class="container my-4">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="text-success mb-3">Add New Fruit</h5>
        <form class="row g-3">
          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Fruit Name" required>
          </div>
          <div class="col-md-3">
            <input type="number" class="form-control" placeholder="Quantity (kg)" required>
          </div>
          <div class="col-md-2 d-grid">
            <button type="submit" class="btn btn-success">Add</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <section class="container my-4">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="text-success mb-3">Current Inventory</h5>
        <table class="table table-bordered table-hover align-middle">
          <thead class="table-success">
            <tr>
              <th>#</th>
              <th>Fruit Name</th>
              <th>Quantity (kg)</th>
              <th>Price per kg (Rs)</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Banana</td>
              <td>1 KG</td>
              <td>120</td>
              <td>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Apple</td>
              <td>1 KG</td>
              <td>250</td>
              <td>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Orange</td>
              <td>1 KG</td>
              <td>150</td>
              <td>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Papaya</td>
              <td>1 KG</td>
              <td>250</td>
              <td>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Guava</td>
              <td>1 KG</td>
              <td>350</td>
              <td>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Mango</td>
              <td>1 KG</td>
              <td>250</td>
              <td>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>lychee</td>
              <td>1 KG</td>
              <td>550</td>
              <td>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>Mangus</td>
              <td>1KG</td>
              <td>750</td>
              <td>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>Grapes</td>
              <td>1 KG</td>
              <td>800</td>
              <td>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>10</td>
              <td>Woodapple</td>
              <td>1 KG</td>
              <td>600</td>
              <td>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  @endsection
</html>
