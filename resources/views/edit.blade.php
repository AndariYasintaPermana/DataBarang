@extends('tampilan')

@section('edit')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">EDIT DATA</h4>
        <p class="card-description">
            Data Barang
        </p>
        <form class="forms-sample" method="POST" action="{{url('update'). '/' . $form[0]->NoBarang}}">
            @csrf
          <div class="form-group">
            <label for="NoBarang">id</label>
            <input name="NoBarang" value="{{$form[0]->id}}" type="text" class="form-control" id="NoBarang" placeholder="No Barang">
          </div>
          <div class="form-group">
            <label for="NoBarang">No Barang</label>
            <input name="NoBarang" value="{{$form[0]->NoBarang}}" type="text" class="form-control" id="NoBarang" placeholder="No Barang">
          </div>
          <div class="form-group">
            <label for="NamaBarang">Nama Barang</label>
            <input name="NamaBarang" value="{{$form[0]->NamaBarang}}" type="text" class="form-control" id="NamaBarang" placeholder="Nama Barang">
          </div>
          <div class="form-group">
            <label for="Varian">Varian</label>
            <input name="Varian" value="{{$form[0]->Varian}}" type="text" class="form-control" id="Varian" placeholder="Varian">
          </div>
          <div class="form-group">
            <label for="TanggalKadaluarsa">Tanggal Kadaluarsa</label>
            <input name="TanggalKadaluarsa" value="{{$form[0]->TanggalKadaluarsa}}" type="date" class="form-control" id="TanggalKadaluarsa" placeholder="Tanggal Kadaluarsa">
          </div>
          <div class="form-group">
            <label for="TanggalProduksi">Tanggal Produksi</label>
            <input name="TanggalProduksi" value="{{$form[0]->TanggalProduksi}}" type="date" class="form-control" id="TanggalProduksi" placeholder="TanggalProduksi">
          </div>
          <div class="form-group">
            <label for="HargaBeli">Harga Beli</label>
            <input name="HargaBeli" value="{{$form[0]->HargaBeli}}" type="number" class="form-control" id="HargaBeli" placeholder="HargaBeli">
          </div>
          <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  
@endsection