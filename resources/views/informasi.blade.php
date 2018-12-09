@extends('template.main-layout')

@section('title', 'Informasi Klinik')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/klinik.css')}}">

<div class="main-container">

	  <!-- Page Content -->
    <div class="main-container">
    
      <!-- Project One -->
      @foreach($clinics as $clinic)
      <div class="row">
        <div class="">
            <a href="{{asset($clinic->picture_src)}}" target="_blank">
              <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset($clinic->picture_src)}}" width="400" height="300" alt="">
            </a>
        </div>

        <div class="">
          <h1>{{$clinic->klinik_name}}</h1> 
          <p>{{$clinic->description}}
          <br> <br> {{$clinic->address}}
          </p>          
          <a class="btn btn-primary" href="{{asset($clinic->picture_src)}}" target="_blank">View FOTO</a>
        </div>
      </div>
      <hr>
      @endforeach


      <!-- /.row -->

      

      <!-- Project Two -->
      <!-- <div class="row">
        <div class="">
          <a href="{{asset('image/klinik/2.jpg')}}" target="_blank">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('image/klinik/2.jpg')}}" width="400" height="300" alt="">
          </a>
        </div>
        <div class="">
          <h1>Garden 8 Klinik Hewan</h1>
          <p>Garden 8 Klinik Hewan merupakan sebuah Klinik Hewan yang berlokasi di Duren Sawit, Jakarta Timur, Jakarta, Indonesia. Saat ini, dokter-dokter yang melakukan praktek di Garden 8 Klinik Hewan diantaranya adalah drh. Reza Sofa H. Anda dapat mengetahui jadwal konsultasi dokter serta melakukan reservasi online di Garden 8 Klinik Hewan melalui kami <br>
          Jl. Raya Pondok kelapa Blok B1/4B - Duren Sawit, Jakarta Timur, Jakarta, Indonesia 13450
          </p>
          <a class="btn btn-primary" href="{{asset('image/klinik/2.jpg')}}" target="_blank">View FOTO</a>
        </div>
      </div> -->
      <!-- /.row -->

      <!-- <hr> -->

      <!-- Project Three -->
      <!-- <div class="row">
        <div class="">
          <a href="{{asset('image/klinik/3.jpg')}}" target="_blank">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('image/klinik/3.jpg')}}" width="400" height="350" alt="">
          </a>
        </div>
        <div class="">
          <h1>Klinik Gusta Vet</h1>
            <p>
            Gustav Vet adalah Klinik Hewan Clinic di Kebayoran Lama, Jakarta. Itu klinik dikunjungi oleh kedokteran dokter hewan seperti drh. Gustav A Mueller ,drh. Meirissa Dwi Herista dan drh. Nur Wulan Febriana . Jadwal dari Gustav Vet adalah: Sen-Jum: 09:00-20:00 dan Sab-Min: 09:00-14:00. Beberapa layanan yang ditangani oleh Clinic adalah: Pet Grooming,mendandani hewan peliharaan,Pemeriksaan Gigi dan Pembersihan Gigi,Pet Service dan Pet shop etc. Klik di peta untuk menemukan arah untuk mencapai Gustav Vet.
            </p>
            <p>Jl. Arteri Kelapa Dua No. 2A, Landmark: di samping Bank Woori Saudara, Jakarta</p>
          <a class="btn btn-primary" href="{{asset('image/klinik/3.jpg')}}" target="_blank">View FOTO</a>
        </div>
      </div> -->
      <!-- /.row -->

      <!-- <hr> -->

      <!-- Project Four -->
      <!-- <div class="row">

        <div class="">
          <a href="{{asset('image/klinik/4.jpg')}}" target="_blank">
            <img class="img-fluid rounded mb-3 mb-md-0"  src="{{asset('image/klinik/4.jpg')}}" width="400" height="350" alt="">
          </a>
        </div>
        <div class="">
          <h1>Klinik Pet Vet</h1>
          <p>Klinik Pet Vet merupakan salah satu klinik yang berada di Jakarta, tepatnya di Jakarta Pusat. Klinik ini menyediakan berbagai macam fasilitas, seperti : Cat hotel, dog hotel, swimming pool, special care dog VVIP, special care cat VVIP, Pet wellness exams, dan juga emergency care services. Selain itu, klinik ini juga menyediakan berbagai macam event, contohnya seperti : konsultasi gratis dan anniversary discount. </p>
            <p>Jl. K.H. Mas Mansyur No.8A, RT.10/RW.6, Karet Tengsin, Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10250</p>
          <a class="btn btn-primary" href="{{asset('image/klinik/4.jpg')}}" target="_blank">View FOTO</a>
        </div>
      </div> -->
      <!-- /.row -->

      <!-- <hr> -->


    </div>
</div>

@endsection
