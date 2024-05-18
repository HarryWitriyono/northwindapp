<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-primary text-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="https://umb.ac.id/wp-content/uploads/2024/03/logo-branding-umb-3-150x150.png" width="50px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Customer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Employees</a>
        </li>
        <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Reports</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Customer List</a></li>
    <li><a class="dropdown-item" href="#">Order List</a></li>
    <li><a class="dropdown-item" href="#">Search</a></li>
  </ul>
</li>
      </ul>
      <a class="d-flex btn btn-danger" href="logout.php">Logout</a>
      <!--form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form-->
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <h3>Navbar Forms</h3>
  <p>You can also include forms inside the navigation bar.</p>
</div>

</body>
</html>


