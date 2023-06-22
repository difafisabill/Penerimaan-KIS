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
        <div class="content-wrapper">
            <div class="row center-form">

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Data Training</h4>

                            <form method="POST" action="{{ route('store.data_training')}}" class="forms-sample">
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
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Usia</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="usia"
                                            class="form-control @error('usia') is-invalid @enderror" placeholder="Usia">
                                    </div>
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
                                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Pendapatan</label>
                                      <select class="form-control" name="pendapatan" aria-label="Default select example">
                                          <option selected>----PILIH PENDAPATAN----</option>
                                          <option selected>Kurang</option>
                                          <option selected>Cukup</option>
                                          <option selected>Lebih</option>
                                        </select>
                                    </div>


                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggungan Anak</label>
                                        <select class="form-control" name="pendapatan" aria-label="Default select example">
                                            <option selected>----PILIH----</option>
                                            <option selected>tidak ada</option>
                                            <option selected>Kurang dari sama dengan 2</option>
                                            <option selected>Lebih dari 2</option>
                                          </select>
                                      </div>


                                      <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Terima KIS</label>
                                        <select class="form-control" name="terima_kis" aria-label="Default select example">
                                            <option selected>----PILIH----</option>
                                            <option selected>Ya</option>
                                            <option selected>Tidak</option>
                                          </select>
                                      </div>



                                    <button type="submit" class="btn btn-primary">Submit</button>


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
