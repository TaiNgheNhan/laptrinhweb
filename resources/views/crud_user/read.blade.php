<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Người Dùng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container d-flex justify-content-center align-items-center">
            <a class="navbar-brand" href="#">Home</a>
            <span class="mx-2">|</span>
            <a class="nav-link" href="#">Đăng Xuất</a>
        </div>
    </nav>

    <!-- User Detail -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header text-center">Chi Tiết Người Dùng</h5>
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="username" class="col-sm-4 col-form-label">Username:</label>
                                <div class="col-sm-8">
                                    <p id="username">Người Dùng 1</p>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-4 col-form-label">Email:</label>
                                <div class="col-sm-8">
                                    <p id="email">user1@example.com</p>
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8 text-end">
                                    <a href="#" class="btn btn-primary">Chỉnh Sửa</a>
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