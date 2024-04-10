@extends('dashboard')
@section('content')
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

@endsection