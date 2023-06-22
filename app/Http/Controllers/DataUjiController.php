<?php

namespace App\Http\Controllers;
use App\Models\DataTraining;


use Illuminate\Http\Request;

class DataUjiController extends Controller
{
    public function index()
    {
        $training = DataTraining::all();
        return view('datauji.data_uji', ['training' => $training]);
    }

    public function hitung(Request $request)
    {

        $output = "";
        $jumlahData = 0;



        // Langkah 1: Menghitung Probabilitas Kelas
        // Hitung jumlah kemunculan setiap kelas terima_kis dalam data training.
        // Hitung probabilitas masing-masing kelas terima_kis.
        $jumlahData = DataTraining::count();
        $jumlahYa = DataTraining::where('terima_kis', 'Ya')->count();
        $jumlahTidak = DataTraining::where('terima_kis', 'Tidak')->count();

        // Probabilitas
        $probabilitasYa = $jumlahYa / $jumlahData;
        $probabilitasTidak = $jumlahTidak / $jumlahData;


        // Langkah 2: Menghitung Probabilitas Atribut
        // Hitung jumlah kemunculan setiap nilai atribut dalam data training.
        // Hitung probabilitas masing-masing nilai atribut.
        // Atribut terima_kis dengan nilai Ya
        $jumlahPendapatanYa = DataTraining::where('pendapatan', $request->pendapatan)->where('terima_kis', 'Ya')->count();
        $jumlahUsiaYa = DataTraining::where('usia', $request->usia)->where('terima_kis', 'Ya')->count();
        $jumlahTanggunganAnakYa = DataTraining::where('tanggungan_anak', $request->tanggungan_anak)->where('terima_kis', 'Ya')->count();
        // Atribut terima_kis dengan nilai Tidak
        $jumlahPendapatanTidak = DataTraining::where('pendapatan', $request->pendapatan)->where('terima_kis', 'Tidak')->count();
        $jumlahUsiaTidak = DataTraining::where('usia', $request->usia)->where('terima_kis', 'Tidak')->count();
        $jumlahTanggunganAnakTidak = DataTraining::where('tanggungan_anak', $request->tanggungan_anak)->where('terima_kis', 'Tidak')->count();


        // Probabilitas
        // Atribut terima_kis dengan nilai Ya
        $probabilitasPendapatanYa = $jumlahPendapatanYa / $jumlahYa;
        $probabilitasUsiaYa = $jumlahUsiaYa / $jumlahYa;
        $probabilitasTanggunganAnakYa = $jumlahTanggunganAnakYa/ $jumlahYa;

        // Atribut terima_kis dengan nilai Tidak
       	$probabilitasPendapatanTidak = $jumlahPendapatanTidak / $jumlahTidak;
        $probabilitasUsiaTidak = $jumlahUsiaTidak / $jumlahTidak;
        $probabilitasTanggunganAnakTidak = $jumlahTanggunganAnakTidak/ $jumlahTidak;



        /// Langkah 3: Menghitung Probabilitas Posterior
        // Hitung probabilitas posterior untuk setiap kelas terima_kis.
        $probabilitasPosteriorYa = $probabilitasYa * $probabilitasPendapatanYa * $probabilitasUsiaYa * $probabilitasTanggunganAnakYa;
	    $probabilitasPosteriorTidak = $probabilitasTidak * $probabilitasPendapatanTidak * $probabilitasUsiaTidak * $probabilitasTanggunganAnakTidak;


        // Langkah 4: Menentukan Kelas
        // Tentukan kelas cuaca yang memiliki probabilitas posterior normalisasi tertinggi.
        $kelas = '';
        $nilaiTertinggi = 0;

        if ($probabilitasPosteriorYa > $probabilitasPosteriorTidak) {
            $nilaiTertinggi = $probabilitasPosteriorYa ;
            $kelas = 'Ya';
        } else if ($probabilitasPosteriorTidak > $probabilitasPosteriorYa) {
            $nilaiTertinggi = $probabilitasPosteriorTidak;
            $kelas = 'Tidak';
        }else {
            $kelas = 'Hasil Dari probabilitas tidak ditemukan';
        }
        $array = [
            'jumlahData' => $jumlahData,
            'jumlahYa' => $jumlahYa,
            'jumlahTidak' => $jumlahTidak,


            'probabilitasYa' => $probabilitasYa,
            'probabilitasTidak' => $probabilitasTidak,


            'probabilitasPendapatan' => $request->pendapatan,
            'probabilitasUsia' => $request->usia,
            'probabilitasTanggunganAnak' => $request->tanggungan_anak,

            'jumlahPendapatanYa' => $jumlahPendapatanYa,
            'jumlahPendapatanTidak' => $jumlahPendapatanTidak,


            'jumlahUsiaYa' => $jumlahUsiaYa,
            'jumlahUsiaTidak' => $jumlahUsiaTidak,


            'jumlahTanggunganAnakYa' => $jumlahTanggunganAnakYa,
            'jumlahTanggunganAnakTidak' => $jumlahTanggunganAnakTidak,

            'probabilitasPosteriorYa' => $probabilitasPosteriorYa,
            'probabilitasPosteriorTidak' => $probabilitasPosteriorTidak,

            'probabilitasPendapatanYa' => $probabilitasPendapatanYa,
            'probabilitasPendapatanTidak' => $probabilitasPendapatanTidak,


            'probabilitasUsiaYa' => $probabilitasUsiaYa,
            'probabilitasUsiaTidak' => $probabilitasUsiaTidak,

            'probabilitasTanggunganAnakYa' => $probabilitasTanggunganAnakYa,
            'probabilitasTanggunganAnakTidak' => $probabilitasTanggunganAnakTidak,


            'kelas' => $kelas,
            'nilaiTertinggi' => $nilaiTertinggi,
        ];
        return view('datauji.hasil_uji', $array);
    }
}
