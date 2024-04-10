@extends('dashboard')
@section('content')

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



    @endsection