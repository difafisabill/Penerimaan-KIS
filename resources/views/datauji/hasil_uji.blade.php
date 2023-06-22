@extends('dashboard')
@section('training')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row center-form">


        <form action="" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">

                    <ul>
                        <div class="alert-danger opacity-20 w" role="alert">
                            <h4>Total Semua data : {{$jumlahData}}</h4>
                            </div>

                        <p>P(terima_kis = Ya) : {{$jumlahYa}}/{{$jumlahData}} = {{$probabilitasYa}}</p>
                        <p>P(terima_kis = Tidak) :{{$jumlahTidak}}/{{$jumlahData}} = {{$probabilitasTidak}}</p>

                    </ul>
                </div>
                <div class="form-group">
                    <ul>

                            <div class="alert-danger opacity-20 w" role="alert">
                            <h4>Pendapatan : {{$probabilitasPendapatan}}</h4>
                            </div>

                        <p>P({{$probabilitasPendapatan}} = Ya) : {{$jumlahPendapatanYa}}/{{$jumlahYa}} = {{$probabilitasPendapatanYa}}</p>
                        <p>P({{$probabilitasPendapatan}} = Tidak) :{{$jumlahPendapatanTidak}}/{{$jumlahTidak}} = {{$probabilitasPendapatanTidak}}</p>

                    </ul>

                </div>
                <div class="form-group">
                    <ul>
                        <div class="alert-danger opacity-20 w" role="alert">
                            <h4>Usia: {{$probabilitasUsia}}</h4>
                            </div>


                        <p>P({{$probabilitasUsia}} = Ya) : {{$jumlahUsiaYa}}/{{$jumlahYa}} = {{$probabilitasUsiaYa}}</p>
                        <p>P({{$probabilitasUsia}} = Tidak) :{{$jumlahUsiaTidak}}/{{$jumlahTidak}} = {{$probabilitasUsiaTidak}}</p>

                    </ul>
                </div>
                <div class="form-group">
                    <ul>
                        <div class="alert-danger opacity-20 w" role="alert">
                            <h4>Tanggungan Anak: {{$probabilitasTanggunganAnak}}</h4>
                            </div>


                        <p>P({{$probabilitasTanggunganAnak}} = Ya) : {{$jumlahTanggunganAnakYa}}/{{$jumlahYa}} = {{$probabilitasTanggunganAnakYa}}</p>
                        <p>P({{$probabilitasTanggunganAnak}} = Tidak) :{{$jumlahTanggunganAnakTidak}}/{{$jumlahTidak}} = {{$probabilitasTanggunganAnakTidak}}</p>

                    </ul>

                </div>
                <div class="form-group">

                    <ul>

                            <h6>Probabilitas Ya : {{$probabilitasYa}} * {{$probabilitasPendapatanYa }} * {{$probabilitasUsiaYa }} * {{ $probabilitasTanggunganAnakYa }} = {{$probabilitasPosteriorYa}} </h6>


                            <h6>Probabilitas Tidak : {{$probabilitasTidak}} * {{$probabilitasPendapatanTidak }} * {{$probabilitasUsiaTidak}} * {{$probabilitasTanggunganAnakTidak }} = {{$probabilitasPosteriorTidak}}</h6>


                    </ul>
                </div>
                <div class="form-group">


                    <ul>
                        <div class="alert-danger opacity-20 w" role="alert">
                            <h4>KEPUTUSAN</h4>
                            </div>
                        <h6>Penerimaan KIS : {{$kelas}}</h6>
                        <h6>Nilai Tertingggi : {{$nilaiTertinggi}}</h6>
                    </ul>
                </div>
                <div class="form-group">

                    <ul>
                        <div class="alert alert-primary opacity-10 w-full" role="alert">
                            {{-- <h6>Pendapatan = "{{$probabilitasPendapatan }}", Dengan Usia = "{{$probabilitasUsia}}" dan Memiliki Tanggungan Anak= "{{$probabilitasTanggunganAnak}}" Maka  "{{$kelas}} untuk menerima KIS"</h6> --}}
                            <h6>Pendapatan = {{$probabilitasPendapatan }}</h6>
                            <h6>Usia = {{$probabilitasUsia}}</h6>
                            <h6>Tanggungan Anak= {{$probabilitasTanggunganAnak}}</h6>
                            <div class="alert-success opacity-20 w" role="alert">
                                <h6>Maka "{{$kelas}} untuk menerima KIS"</h6>
                                </div>
                        </div>

                    </ul>
                </div>
                {{-- <input type="submit" name="save" class="btn btn-primary" value="Save"> --}}
            </div>
            <!-- /.card-body -->
        </form>









      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    @include('layouts.footer')
    <!-- partial -->
  </div>
@endsection
