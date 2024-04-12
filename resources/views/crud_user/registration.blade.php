@extends('dashboard')
@section('content')
<!-- Form Đăng Ký -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <h5 class="card-header text-center">Đăng Ký</h5>
        <div class="card-body">
          <form method="post" action="{{ route('user.postUser') }}">
            @csrf
            <div class="mb-3 row">
              <label for="name" class="col-sm-4 col-form-label">Tên đăng nhập:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="name" id="name" placeholder="">
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </div>
            </div>
            <div class="mb-3 row">
              <label for="password" class="col-sm-4 col-form-label">Mật khẩu:</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" id="password" placeholder="">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
              </div>
            </div>
            <div class="mb-3 row">
              <label for="password_confirmation" class="col-sm-4 col-form-label">Nhập lại mật khẩu:</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="">
                @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
              </div>
            </div>
            <div class="mb-3 row">
              <label for="email" class="col-sm-4 col-form-label">Email:</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" id="email" placeholder="">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>
            </div>
            <div class="mb-3 row">
              <div class="col-sm-8 offset-sm-4 text-end">
                <a href="{{ route('login') }}">Đã có tài khoản? Đăng nhập ngay!</a>
                <button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection