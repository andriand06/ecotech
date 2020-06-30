@extends('master')

@section('content')

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Selamat Datang, {{ \Auth::guard('mahasiswa')->user()->nama}}</h2>
        </div>
        <table class="table table-sm white">
            <tbody>
                <tr>
                    <td rowspan="4" width="100">
                    <img src="{{ \Storage::url(Auth::guard('mahasiswa')->user()->foto)}}" alt="foto-mahasiswa">
                    <td align="left">Nama</td>
                    <td align="left">:{{ \Auth::guard('mahasiswa')->user()->nama}}</td>
                </tr>
                
                <tr>
                    <td align="left">Jenis Kelamin</td>
                    <td align="left">:{{ Auth::guard('mahasiswa')->user()->jk}}</td>
                </tr>
                <tr>
                    <td align="left">Tanggal Lahir</td>
                    <td align="left">:{{ Auth::guard('mahasiswa')->user()->tanggal_lahir}}</td>
                </tr>
                <tr>
                    <td align="left">Email</td>
                    <td align="left">:{{ Auth::guard('mahasiswa')->user()->email}}</td>
                </tr>
                
            </tbody>
        
        </table>
        <table class="table table-hover">
            <thead>
                <tr class="bg-dark text-white">
                    <th>No</th>
                    <th>Nama Dokumen</th>
                    <th>Status</th>
                </tr>

            </thead>
        </table>
        <h2>Input Syarat Pendaftaran Mahasiswa Baru</h2>
        <form action="{{ url('simpan-syarat')}}" method="post">
            <select name="nama" id="nama">
                @foreach ($syarat as $item)
                    <option value="{{$item->nama}}">{{$item->syarat}}</option>
                @endforeach
            </select>
        
        </form>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

@endsection
