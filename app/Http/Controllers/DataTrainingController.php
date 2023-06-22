<?php

namespace App\Http\Controllers;
use App\Models\DataTraining;
use Illuminate\Http\Request;

class DataTrainingController extends Controller
{
    public function TampilanTraining()
    {
        $data = DataTraining::all();
        return view('datatraining.datatraining', ['data' => $data]);
    }


    public function AddTraining()
    {

        $data= DataTraining::all();

        return view('datatraining.add_datatraining', compact('data'));


    }
    public function StoredataTraining(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'usia' => 'required',
            'pendidikan_terakhir' => 'required',
            'pendapatan' => 'required',
            'tanggungan_anak' => 'required',
            'terima_kis' => 'required',



        ]);

        DataTraining::create($request->all());

        session()->flash('flash_training', 'Disimpan');
        return redirect()->route('view.training');

    }
    // public function hapus($id)
    // {
    //     DataTraining::destroy($id);

    //     session()->flash('flash_training', 'Dihapus');
    //     return redirect('DataTrainingCuaca');
    // }
    // public function ubah(Request $request, $id)
    // {
    //     $request->validate([
    //         'hari' => 'required',
    //         'suhu' => 'required',
    //         'kelembaban' => 'required',
    //         'kecepatan_angin' => 'required',
    //         'cuaca' => 'required',
    //     ]);

    //     $data = $request->all();
    //     unset($data['_token']);

    //     DataTraining::where('id', $id)->update($data);

    //     session()->flash('flash_training', 'DiUbah');
    //     return redirect('DataTrainingCuaca');
    // }
}
