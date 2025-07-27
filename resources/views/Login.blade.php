@extends('Layouts.master')
@section('content')
<body class="bg-light">

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 400px;">
      <h3 class="text-center text-success mb-4">Fruit Shop Login</h3>
      
      <form>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Enter username" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>

        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-success">Login</button>
        </div>

      </form>
    </div>
  </div>

 @endsection
</html>
