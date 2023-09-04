@extends('layouts.main')

@section('container')

<section class="d-flex flex-column justify-content-center align-items-center" >
    <div class="container mt-lg-5 text-center ">
        <h2 class=" mb-5 " ><strong></strong></h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
            {{-- col 1 --}}
                <div class="col">
                <div class="card border-primary h-100">
                    <div class="card-header bg-primary text-light border-primary">REVISI</div>
                    <div class="card-body ">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Penomoran Halaman</li>
                            <li class="list-group-item">Kerapian Halaman</li>
                            <li class="list-group-item">Include Semua</li>
                        </ul>
                        <p class=" mt-5 " >
                            Rp.15.000-30.000
                        </p>
                    <a href="https://wa.link/438bir" class="btn btn-primary m-3 ">Pesan</a> 
                </div>
                </div>
                </div>
            {{-- col 2 --}}
            <div class="col">
                <div class="card border-primary h-100">
                <div class="card-header bg-primary text-light border-primary">INPUT DATA</div>
                <div class="card-body ">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Microsoft Word</li>
                            <li class="list-group-item">Microsoft Exel</li>
                            <li class="list-group-item">Microsoft Power Point</li>
                        </ul>
                        <p class=" mt-5 " >
                            Rp.5.000-10.000/HL
                        </p>
                    <a href="https://wa.link/gsag9m" class="btn btn-primary m-3 ">Pesan</a> 
                </div>
                </div>
            </div>
            {{-- col 3 --}}
            <div class="col">
                <div class="card border-primary h-100">
                <div class="card-header bg-primary text-light border-primary">JOKI</div>
                <div class="card-body ">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Makalah</li>
                            <li class="list-group-item">Power Point</li>
                            <li class="list-group-item">Internet OF Things</li>
                        </ul>
                        <p class=" mt-5 " >
                            Rp.20.000-150.000
                        </p>
                    <a href="https://wa.link/z54w7r" class="btn btn-primary m-3 ">Pesan</a> 
                </div>
                </div>
            </div>
            {{-- col 4 --}}
            <div class="col">
                <div class="card border-primary h-100">
                <div class="card-header bg-primary text-light border-primary">WEBSITE</div>
                <div class="card-body ">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Pembuatan CV</li>
                            <li class="list-group-item"></li>
                        </ul>
                        <p>
                            CV dibuat dengan menggunakan bahasa HTML,CSS dan Js. Client bisa request 
                            sesuai keinginan, baik itu secara langsung atau dari link contoh CV.
                        </p>
                        <p>- FORMAT DOMAIN -</p>
                        <p class=" text-success " >namamu.vercel.app</p>
                        <p class=" mt-5 " >
                            Rp.70.000-200.000
                        </p>
                    <a href="https://wa.link/keq51j" class="btn btn-primary m-3 ">Pesan</a> 
                </div>
                </div>
            </div>
            {{-- col 5 --}}
            <div class="col">
                <div class="card border-primary h-100">
                <div class="card-header bg-primary text-light border-primary">VIDIO</div>
                <div class="card-body ">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Subtitle</li>
                            <li class="list-group-item"></li>
                        </ul>
                        <p>
                            Pembuatan Subtitle Vidio dengan durasi <br> 5-20 menit dengan bahasa Indonesia
                            dan bahasa inggris
                        </p><br>
                        <p>- FORMAT VIDIO -</p>
                        <p class=" text-success " >.mp4</p>
                        <p class=" mt-5 " >
                            Rp.30.000-100.000
                        </p>
                    <a href="https://wa.link/ja1bi8" class="btn btn-primary m-3 ">Pesan</a> 
                </div>
                </div>
            </div>
        </div>
      </div>
</section>


@endsection