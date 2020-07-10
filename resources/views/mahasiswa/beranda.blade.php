@extends('master')

@section('content')

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Selamat Datang, {{ \Auth::guard('mahasiswa')->user()->nama}}</h2>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <table class="table table-sm white">
            <tbody>
                <tr>
                    <td rowspan="5" width="100">
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
                <tr>
                    <td align="left">Jurusan</td>
                    <td align="left">:{{ $registrasi->jurusan->nama}}</td>
                </tr>
                
            </tbody>
        
        </table>
        <table class="table table-hover">
            <thead>
                <tr class="bg-dark text-white">
                    <th>No</th>
                    <th>Nama Dokumen</th>
                    <th>Download</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registrasi->syarats as $item)
                    <tr> 
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td><a href="{{ \Storage::url($item->file)}}" target="blank"><i class="fa fa-download"></i> Download File</a></td>
                        <td><i class="fa fa-flag" aria-hidden="true"></i> {{$item->status}}</td>
                        <td><a href="{{url('mahasiswa/hapus-syarat',$item->id)}}" onclick="return confirm('Anda Yakin ingin Menghapus File ini?')"><i class="fa fa-remove"></i> Hapus</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h2>Input Syarat Pendaftaran Mahasiswa Baru</h2>
        @if(session('pesan'))
        <div class="alert alert-success">
            {{session('pesan')}}
        
        </div>
        @endif
        <form action="{{route('simpansyarat')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Syarat</label>
                <select name="nama" id="nama" class="form-control">
                @foreach ($syarat as $item)
                    <option value="{{$item->nama}}">{{$item->syarat}}</option>
                @endforeach
                <span class="text-helper">{{ $errors->first('nama')}}</span>
                </select>
            </div>
           <div class="form-group">
                <label for="file">File(Format : jpg,jpeg,png)</label>
                <input type="file" name="file" id="file" class="form-control">
                <span class="text-helper">{{ $errors->first('file')}}</span>
           </div>
           <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
           </div>

            

        </form>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

@endsection
