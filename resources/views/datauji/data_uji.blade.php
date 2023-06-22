@extends('dashboard')
@section('training')
    <style>
        .center-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }


    </style>

    <div class="main-panel">
        @if (session('flash_training'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h6>
                <i class="icon fas fa-check"></i>
                Data Berhasil
                <strong>
                    {{ session('flash_training') }}
                </strong>
            </h6>
        </div>
        @endif
        <div class="content-wrapper">
            <div class="row center-form">

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Uji</h4>

                            <form method="POST" action="/DataUji/hitung" class="forms-sample">
                                @csrf
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="nik"
                                            class="form-control @error('nik') is-invalid @enderror" placeholder="NIK">
                                    </div>
                                    @error('nik')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pendidikan_terakhir"
                                            class="form-control @error('pendidikan_terakhir') is-invalid @enderror" placeholder="Pendidikan Terakhir">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pekerjaan"
                                            class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="Pekerjaan">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Usia</label>
                                    <select class="form-control" name="usia">

                                        <option value="dibawah 30 tahun">Dibawah 30 Tahun</option>
                                        <option value="diatas 30 tahun">Diatas 30 Tahun</option>

                                      </select>
                                  </div>

                                  <div class="form-group row">
                                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Pendapatan</label>
                                      <select class="form-control" name="pendapatan">

                                          <option value="kurang">Kurang</option>
                                          <option value="cukup">Cukup</option>
                                          <option value="lebih">Lebih</option>
                                        </select>
                                    </div>


                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggungan Anak</label>
                                        <select class="form-control" name="tanggungan_anak">

                                            <option value="tidak ada">tidak ada</option>
                                            <option value="kurang dari sama dengan 2">Kurang dari sama dengan 2</option>
                                            <option value="lebih dari 2">Lebih dari 2</option>
                                          </select>
                                      </div>


                                    <button type="submit" class="btn btn-primary">Naive Byyes</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('layouts.footer')
        <!-- partial -->
    </div>
@endsection
