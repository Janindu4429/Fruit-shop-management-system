@extends('Layouts.master')
@section('content')

<div class="container mt-4">
  <h2 class="text-success mb-4">🍍 Supplier Management</h2>

  <!-- Add Supplier Form -->
  <div class="card mb-4">
    <div class="card-header bg-success text-white">
      Add New Supplier
    </div>
    <div class="card-body">
      <form id="addSupplierForm">
        <div class="row g-3">
          <div class="col-md-6">
            <label for="supplierName" class="form-label">Supplier Name</label>
            <input type="text" class="form-control" id="supplierName" required>
          </div>
          <div class="col-md-6">
            <label for="contactNumber" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contactNumber" required>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address">
          </div>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-success">Add Supplier</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Supplier Table -->
  <div class="card">
    <div class="card-header bg-success text-white">
      Supplier List
    </div>
    <div class="card-body">
      <table class="table table-bordered table-striped">
        <thead class="table-success">
          <tr>
            <th>#</th>
            <th>Supplier Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="supplierTableBody">
          <tr>
            <td>1</td>
            <td>Green Farm Supplies</td>
            <td>0771234567</td>
            <td>greenfarm@gmail.com</td>
            <td>Galle Road, Colombo</td>
            <td>
              <button class="btn btn-sm btn-primary">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
          <!-- More rows can be added dynamically -->
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection