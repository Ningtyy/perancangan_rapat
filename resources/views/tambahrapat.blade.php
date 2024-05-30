@extends('layouts.app')

@section('title', 'Tambah Rapat')

@section('judul')
  <strong>Tambah Rapat</strong>
@endsection
  
@section('content')
    <form class="row g-3" action="/tambah/rapat" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="id_rapat" class="form-label">Nomor Rapat</label>
            <input type="text" class="form-control" name="id_rapat">
        </div>
        <div class="col-md-6">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal">
        </div>
        <div class="col-md-6">
            <label for="waktu" class="form-label">Waktu</label>
            <input type="time" class="form-control" name="waktu">
        </div>
        <div class="col-md-6">
            <label for="pimpinan" class="form-label">Pimpinan</label>
            <input type="text" class="form-control" name="pimpinan">
        </div>
        <div class="col-md-6">
            <label for="jabatan_pimpinan" class="form-label">Jabatan pimpinan</label>
            <input type="text" class="form-control" name="jabatan_pimpinan">
        </div>
        <div class="col-md-6">
            <label for="inisiator" class="form-label">Inisiator</label>
            <input type="text" class="form-control" name="inisiator">
        </div>
        <div class="col-md-6">
            <label for="notulis" class="form-label">Notulis</label>
            <input type="text" class="form-control" name="notulis">
        </div>
        <div class="col-md-12">
            <label for="acara" class="form-label">Acara</label>
            <input type="text" class="form-control" name="acara" rows="3"></textarea>
        </div>
        <div class="col-md-12">
            <label for="catatan" class="form-label">Catatan</label>
            <input type="text" class="form-control" name="catatan" rows="3"></textarea>
        </div>
        
        {{--
        <div class="col-md-12">
            <label for="peserta" class="form-label">Yang menghadiri rapat:</label><table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Bagian</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Nomor HP</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
            </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <label for="peserta" class="form-label">Sebagai laporan:</label><table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
            </tbody>
            </table>
        </div>


        <div class="col-12">
        @php
            $numFields = old('numFields', 1); // Jumlah kolom input yang ingin ditampilkan
        @endphp

            <input type="hidden" name="numFields" value="{{ $numFields }}">

            <div id="inputContainer">
                @for ($i = 0; $i < $numFields; $i++)
                    <div>
                        <input type="text" name="dynamicField[]" value="{{ old('dynamicField.' . $i) }}" required>
                    </div>
                @endfor
            </div>

            <button type="submit" name="add" value="add">Tambah Kolom</button>
            <button type="submit" name="submit" value="submit">Submit</button>
        </div>
        --}}

            
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Tambah Rapat</button>
        </div>
    </form>
@endsection
