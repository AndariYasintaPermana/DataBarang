@extends('tampilan')

@section('hasil')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Hasil Inputan</h4>
        <p class="card-description">
        Add class <code>.table-bordered</code>
        </p>
        <div class="table-responsive pt-3">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        No Barang
                    </th>
                    <th>
                        Nama Barang
                    </th>
                    <th>
                        Varian
                    </th>
                    <th>
                        Tanggal Kadaluarsa
                    </th>
                    <th>
                        Tanggal Produksi
                    </th>
                    <th>
                        Harga Beli
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($form as $key)
                <tr>
                    <td>{{ $key -> NoBarang}}</td>
                    <td>{{ $key -> NamaBarang}}</td>
                    <td>{{ $key -> Varian}}</td>
                    <td>{{ $key -> TanggalKadaluarsa}}</td>
                    <td>{{ $key -> TanggalProduksi}}</td>
                    <td>{{ $key -> HargaBeli}}</td>
                    <td><button type="button" onclick="window.location.href='{{url('edit/'.$key->NoBarang)}}';" class="btn btn-warning">Edit</button><br> <br>
                    <button type="button" onclick="window.location.href='{{url('delete/'.$key->NoBarang)}}';" class="btn btn-secondary">Hapus</button></td>
                </tr>  
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>
@endsection
