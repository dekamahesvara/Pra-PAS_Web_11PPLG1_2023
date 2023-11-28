@extends('layouts.main')

@section('content')
<div class="accordion container mt-5" id="accordionExample">
    @foreach($data_laptops as $item)
    <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$loop->iteration}}" aria-expanded="false" aria-controls="collapse{{$loop->iteration}}">
            Laptop #{{$loop->iteration}}
          </button>
        </h2>
        <div id="collapse{{$loop->iteration}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Informasi Laptop #{{$loop->iteration}}</strong>
                <ul>
                    <li><strong>Nama:</strong> {{$item->nama}}</li>
                    <li><strong>Brand:</strong> {{$item->brand}}</li>
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
                <li id="brand"><strong>Brand:</strong></li>
                <li id="harga"><strong>Harga:</strong></li>
                <li id="tanggal"><strong>Tanggal Pembuatan:</strong></li>
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
    fetch(`/datalaptop/${id}`)
    .then(response => response.json())
    .then(data => {
    console.log(data);
    document.getElementById("nama").innerHTML = `Nama: ${data.nama}`;
    document.getElementById("brand").innerHTML = `Brand: ${data.brand}`;
    document.getElementById("harga").innerHTML = `Harga: ${data.harga}`;
    document.getElementById("tanggal").innerHTML = `Tanggal Pembuatan: ${data.tanggal_pembuatan}`;
  })
  .catch(error => {
    console.error("An error occurred:", error);
  });
});
});
</script>
  

@endsection

