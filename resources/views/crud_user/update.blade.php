@extends('dashboard')
@section('content')
  <!-- Form Cập Nhật Thông Tin -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <h5 class="card-header text-center">Cập Nhật Thông Tin</h5>
          <div class="card-body">
            <form>
              <div class="mb-3 row">
                <label for="username" class="col-sm-4 col-form-label">Tên đăng nhập:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="username" placeholder="">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="password" class="col-sm-4 col-form-label">Mật khẩu mới:</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="password" placeholder="">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="confirmPassword" class="col-sm-4 col-form-label">Nhập lại mật khẩu mới:</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="confirmPassword" placeholder="">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="email" class="col-sm-4 col-form-label">Email mới:</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-sm-8 offset-sm-4 text-end">
                  <a href="#">Đã có tài khoản?</a>
                  <button type="submit" class="btn btn-primary btn-block">Cập Nhật</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  @endsection
