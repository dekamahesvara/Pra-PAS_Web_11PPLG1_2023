@extends('layouts.main')

@section('content')
<div class="accordion container mt-5" id="accordionExample">
    @foreach($pelanggans as $item)
    <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$loop->iteration}}" aria-expanded="false" aria-controls="collapse{{$loop->iteration}}">
            Pelanggan #{{$loop->iteration}}
          </button>
        </h2>
        <div id="collapse{{$loop->iteration}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Informasi Pelanggan #{{$loop->iteration}}</strong>
                <ul>
                    <li><strong>Nama:</strong> {{$item->nama}}</li>
                    <li><strong>Alamat:</strong> {{$item->alamat}}</li>
                </ul>
                <button type="button" data-id="{{ $item->id }}" class="detail btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</button>
              </div>
        </div>
    </div>
    @endforeach
  </div>

  {{-- DETAIL --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Detail</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ul>  
                <li id="nama"><strong>Nama:</strong></li>
                <li id="alamat"><strong>Alamat:</strong></li>
                <li id="nomor"><strong>Nomor Telepon:</strong></li>
                <li id="tanggal"><strong>Tanggal Pesanan:</strong></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
  
  <script>
      let buttons = document.querySelectorAll(".detail");

    buttons.forEach(button => {
    button.addEventListener("click", function() {
    const id = button.getAttribute("data-id");
    fetch(`/pelanggan/${id}`)
    .then(response => response.json())
    .then(data => {
    console.log(data);
    document.getElementById("nama").innerHTML = `Nama: ${data.nama}`;
    document.getElementById("alamat").innerHTML = `Alamat: ${data.alamat}`;
    document.getElementById("nomor").innerHTML = `Nomor Telepon: ${data.nomor}`;
    document.getElementById("tanggal").innerHTML = `Tanggal Pesanan: ${data.tanggal_pesanan}`;
  })
  .catch(error => {
    console.error("An error occurred:", error);
  });
});
});
</script>
  

@endsection

