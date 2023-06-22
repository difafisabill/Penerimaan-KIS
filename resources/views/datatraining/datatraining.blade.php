@extends('dashboard')
@section('training')
<div class="main-panel">
    <div class="button  me-2">

            <ol class="breadcrumb">
                <div class="button  me-2">
                    <a href = "{{route('training.add_data')}}" class="btn btn-primary">
                        <i class="btn-icon-prepend" data-feather="plus"></i>
                        Tambah Data
                    </a>
                </div>


            </ol>

    </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data Training</h4>

              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Usia</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Pekerjaan</th>
                        <th>Pendapatan</th>
                        <th>Tangguan Anak</th>
                        <th>Terima KIS</th>
                        {{-- <th>Action</th> --}}
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $key=>$item)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$item -> nik}}</td>
                      <td>{{$item -> usia}}</td>
                      <td>{{$item -> pendidikan_terakhir}}</td>
                      <td>{{$item -> pekerjaan}}</td>
                      <td>{{$item -> pendapatan}}</td>
                      <td>{{$item -> tanggungan_anak}}</td>

                      <td>{{$item -> terima_kis}}</td>
                      {{-- <td>
                          <a href = "" class="btn btn-primary btn-icon">
                              Edit
                          </a>
                          <a href = "" class="btn btn-danger btn-icon" id="delete">
                              Delete
                          </a>
                      </td> --}}
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
@endsection
