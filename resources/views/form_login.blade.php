@extends('master')

@section('content')
<!-- ======= Icon Boxes Section ======= -->


    <!-- == Pendaftaran Section == -->
    <section id="daftar"> 
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Form Login</h2>
            <p>Belum Punya Akun?Registrasi <a href="{{ route('daftar.form') }}">disini.</a></p>
        </div>
        @if(session('pesan'))
            <div class="alert alert-danger">
            {{session('pesan')}}
            </div>

        @endif
        <div class="row content">
            <div class="col-lg-6">
                <form action="{{url('proses-login')}}" method="post">
                @csrf                     
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control">
                      <span class="text-helper">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control">
                      <span class="text-helper">{{ $errors->first('password') }}</span>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

    </section><!-- Akhir Pendaftaran -->

@endsection
