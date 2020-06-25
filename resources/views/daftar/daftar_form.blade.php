@extends('master')

@section('header')
<div class="container d-flex align-items-center">

<h1 class="logo mr-auto"><a href="#header" class="scrollto">Ecotech</a></h1>
<!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

<nav class="nav-menu d-none d-lg-block">
  <ul>
    <li><a href="{{url('/')}}">Home</a></li>
    <li class="active"><a href="{{ route('daftar.form') }}">Pendaftaran</a></li>
    <li><a href="{{route('about')}}">About</a></li>
    <li><a href="#team">Team</a></li>
    <li><a href="blog.html">Blog</a></li>
    <li class="drop-down"><a href="">Services </a>
      <ul>

        <li class="drop-down"><a href="#">Web Development</a>
          <ul>
            <li><a href="#">Website Company Profile</a></li>
            <li><a href="#">Website E-Commerce</a></li>
           
          </ul>
        </li>
        <li class="drop-down"><a href="#">Video & Graphic Design</a>
          <ul>
            <li><a href="#">Website Design</a></li>
            <li><a href="#">Logo Design</a></li>
            <li><a href="#">Banner Design</a></li>
            <li><a href="#">Brocure Design</a></li>
            <li><a href="#">Card Design</a></li>
            <li><a href="#">Custom Design</a></li>           
          </ul>
          <li class="drop-down"><a href="#">Digital Marketing</a>
          <ul>
            <li><a href="#">Search Engine Optimization</a></li>
            <li><a href="#">Social Media Ads</a></li>
            <li><a href="#">Video Animation</a></li>
            <li><a href="#">Website Management</a></li>
            <li><a href="#">Social Media Management</a></li>
           
          </ul>
      </ul>
    </li>
    <li><a href="#contact">Contact</a></li>

  </ul>
</nav><!-- .nav-menu -->

</div>

@endsection
@section('content')
<!-- ======= Icon Boxes Section ======= -->
<section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Isi Data Diri</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Lampirkan File Data</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Verifikasi Data</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="">Anda Terdaftar!</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- == Pendaftaran Section == -->
    <section id="daftar"> 
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Pendaftaran Ecotech</h2>
            <p>Silahkan isi data diri anda di formulir berikut ini.</p>
        </div>
        @if(session('pesan'))
            <div class="alert alert-success">
            {{session('pesan')}}
            </div>

        @endif
        <div class="row content">
            <div class="col-lg-6">
                <form action="{{route('daftar.simpan')}}" method="post">
                @csrf
                    <div class="form-group">
                      <label for="nama">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama" id="nama">
                      <span class="text-helper">{{ $errors->first('nama') }}</span>
                    </div>
                    <div class="jenis">
                      <p>Jenis Kelamin</p>
                      <div class="form-group form-check-inline">
                          <input type="checkbox" class="form-check-input" name="jk" id="jk" value="Laki-Laki">
                          <label class="form-check-label" for="jk">Laki-Laki</label>

                            
                      </div>
                      <div class="form-group form-check-inline">
                          <input type="checkbox" class="form-check-input" name="jk" id="jk" value="Perempuan">
                          <label class="form-check-label" for="jk">Perempuan</label>
                      </div>
                      <span class="text-helper">{{ $errors->first('jk') }}</span>
                    </div>
                    <div class="form-group">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                      <span class="text-helper">{{ $errors->first('tanggal_lahir') }}</span>
                    </div>
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
                    <div class="form-group">
                      <label for="asal_sekolah">Asal Sekolah</label>
                      <select name="asal_sekolah" class="form-control">
                        <option selected>Asal Sekolah</option>
                        <option value="SMA Unggul Sakti">SMA Unggul Sakti</option>
                        <option value="SMA Xaverius 1">SMA Xaverius 1</option>
                        <option value="SMAN 3">SMAN 3</option>
                        <option value="SMAN 5">SMAN 5</option>
                      </select>
                      <span class="text-helper">{{ $errors->first('asal_sekolah') }}</span>
                    </div>
                    <div class="form-group">
                      <label for="foto">Foto</label>
                      <input type="file" name="foto" id="foto" class="form-control">
                      <span class="text-helper">{{ $errors->first('foto') }}</span>
                    </div>
                    <div class="form-group">
                      <label for="jurusan">Jurusan</label>
                      <select name="jurusan_id" id="jurusan" class="form-control">
                        @foreach ($jurusan as $item)
                        <option value="{{$item->nama}}">{{$item->nama}}</option>

                        @endforeach
                      </select>
                      <span class="text-helper">{{ $errors->first('jurusan_id') }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    </section><!-- Akhir Pendaftaran -->

@endsection
