<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Đăng Nhập</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container justify-content-center">
      <a class="navbar-brand" href="#">Home</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="login.html">Đăng Nhập</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register-user.html">Đăng Ký</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <!-- Form Đăng Nhập -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <h5 class="card-header text-center">Đăng Nhập</h5>
          <div class="card-body">
            <form>
              <div class="mb-3 row">
                <label for="username" class="col-sm-4 col-form-label">Tên đăng nhập:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="username" placeholder="">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="password" class="col-sm-4 col-form-label">Mật khẩu:</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="password" placeholder="">
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Ghi nhớ đăng nhập</label>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8 text-end"> <!-- Sử dụng class text-end để căn phải -->
                  <a href="#" class="float-start">Quên mật khẩu?</a>
                  <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  

<!-- Footer -->
<footer class="footer fixed-bottom bg-light py-3">
    <div class="container text-center">
      <span>© 2024 Trang Đăng Nhập</span>
    </div>
  </footer>
<!-- Bootstrap JS và Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
