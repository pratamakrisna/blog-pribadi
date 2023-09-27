@extends('layouts.main')

@section('container')

    <section id="" class="d-flex flex-column justify-content-center align-items-center"></section>
    <main class=" container " >
      <h3 class=" mb-3 " >Selamat Datang di Greate Service Center!</h3>
      <div class="lg mb-4 ">
        <span class="letter-g">G</span>
      </div>
      <p>
        Great Service Center adalah sebuah toko yang menyediakan berbagai macam layanan 
        jasa, kursus, dan konsultasi yang dapat diakses secara online. Website ini didesain 
        dengan tampilan yang menarik dan mudah digunakan serta memiliki fitur-fitur yang lengkap 
        untuk memudahkan pelanggan dalam memilih layanan yang diinginkan. Pelanggan dapat memilih 
        layanan yang sesuai dengan kebutuhan mereka dan melakukan pemesanan secara online. 
        Great Service Center juga menyediakan tenaga pengajar atau konsultan yang berkualitas 
        dan berpengalaman dalam bidangnya masing-masing. Pembayaran dapat dilakukan secara tunai 
        atau non-tunai seperti transfer bank atau dana dll. Selain itu, website ini juga memiliki
        kebijakan pembatalan untuk pelanggan yang tidak dapat hadir pada jadwal yang telah disepakati. 
        Dengan segala spesifikasi dan layanan yang ditawarkan, Great Service Center siap memberikan pelayanan
        terbaik untuk memenuhi kebutuhan pelanggan secara online.
      </p>

      <div class="rules mt-5 mb-5 ">
        <h3>Aturan Toko</h3>
        <ol>
          <li>Pelanggan harus membaca deskripsi layanan dengan teliti sebelum melakukan pemesanan.</li>
          <li>Pelanggan harus memberikan informasi yang akurat dan lengkap saat melakukan pemesanan.</li>
          <li>Pelanggan harus melakukan pembayaran sesuai dengan instruksi yang diberikan oleh toko.</li>
          <li>Toko akan memberikan konfirmasi pemesanan dan informasi pengiriman kepada pelanggan melalui email atau pesan teks.</li>
          <li>Pelanggan harus memeriksa barang yang diterima setelah pengiriman dan memberikan konfirmasi penerimaan.</li>
          <li>Jika terdapat masalah atau keluhan, pelanggan dapat menghubungi toko melalui layanan pengaduan dibawah</li>
          <li>Toko berhak membatalkan pemesanan jika terdapat informasi yang tidak akurat atau tidak lengkap dari pelanggan.</li>
          <li>Toko berhak menolak pemesanan jika stok tidak tersedia atau jika terdapat kesalahan harga atau deskripsi layanan pada website.</li>
        </ol>
      </div>

      <div class="payment-methods mb-5 ">
        <h3>Cara Pembayaran</h3>
        <p>Kami menerima pembayaran melalui:</p>
        <ul class="list-unstyled">
          <li>
            <div class="d-flex align-items-center mb-3 ">
              <img src="assets/img/dana.png" alt="Logo Dana" class="img-fluid mr-3" style="max-width: 100px;">
              <span class="font-weight-bold"></span>
            </div>
          </li>
          <li>
            <div class="d-flex align-items-center">
              <img src="assets/img/bank.png" alt="Logo Bank" class="img-fluid mr-3" style="max-width: 80px;">
              <span class="font-weight-bold"></span>
            </div>
          </li>
        </ul>
        <p>Untuk pembayaran dengan Dana, silakan kirimkan pembayaran ke nomor akun kami yang terdaftar di aplikasi Dana. 
          Untuk pembayaran dengan transfer bank, silakan transfer ke rekening kami. Adapun untuk nomer rekening dan 
          nomer dana akan kami kirim setelah Deal atau Acc dari kedua belah pihak.
        </p>
        <p>Setelah melakukan pembayaran, silakan konfirmasi pembayaran Anda melalui nomor telepon yang tertera di website kami. Setelah pembayaran Anda terkonfirmasi, kami akan segera memproses pesanan Anda.</p>
      </div>
      
    </main>
@endsection