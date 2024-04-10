<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Người Dùng</title>
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





    <!-- Danh sách người dùng trong một card -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Danh Sách Người Dùng</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Người Dùng 1</td>
                                <td>user1@example.com</td>
                                <td>
                                    <a href="#" style="text-decoration: none;">Edit</a> |
                                    <a href="#" style="text-decoration: none;">View</a> |
                                    <a href="#" style="text-decoration: none;">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Người Dùng 2</td>
                                <td>user2@example.com</td>
                                <td>
                                    <a href="#" style="text-decoration: none;">Edit</a> |
                                    <a href="#" style="text-decoration: none;">View</a> |
                                    <a href="#" style="text-decoration: none;">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Người Dùng 3</td>
                                <td>user3@example.com</td>
                                <td>
                                    <a href="#" style="text-decoration: none;">Edit</a> |
                                    <a href="#" style="text-decoration: none;">View</a> |
                                    <a href="#" style="text-decoration: none;">Delete</a>
                                </td>
                            </tr>
                            <!-- Thêm các dòng khác tại đây -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="bottom fixed-bottom">
        <!-- Thanh điều hướng trang -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">Previous</span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">Next</span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </li>
            </ul>
        </nav>


        <footer class="footer bg-light py-3">
            <div class="container text-center">
                <span>© 2024 Trang Cập Nhật Thông Tin</span>
            </div>
        </footer>
    </div>


    <!-- Bootstrap JS và Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>