<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeratModel;

class BeratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berat = BeratModel::orderByDesc('tanggal','desc')->get();

        $min_rata_rata= 0;
        $max_rata_rata= 0;
        $perbedaan_rata_rata= 0;
        foreach ($berat as $key) {
            $min_rata_rata += $key['min'];
            $max_rata_rata += $key['max'];
            $perbedaan_rata_rata += $key['perbedaan'];
        }

        $min_rata_rata= round($min_rata_rata/count($berat), 1);
        $max_rata_rata= round($max_rata_rata/count($berat), 1);
        $perbedaan_rata_rata= round($perbedaan_rata_rata/count($berat), 1);

        return view('dashboard.berat.index',compact('berat', 'max_rata_rata', 'min_rata_rata', 'perbedaan_rata_rata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.berat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perbedaan = abs($request->all()['max'] - $request->all()['min']);
        $data = [
            'tanggal' => $request->all()['tanggal'], 
            'max' => $request->all()['max'], 
            'min' => $request->all()['min'], 
            'perbedaan' => $perbedaan, 
        ];
        BeratModel::create($data);
        return redirect()->route('berat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BeratModel $berat)
    {
        //
        return view('dashboard.berat.detail',compact('berat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berat = BeratModel::find($id);
        return view('dashboard.berat.edit',compact('berat'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $perbedaan = abs($request->all()['max'] - $request->all()['min']);

        $data = [
            'tanggal' => $request->all()['tanggal'], 
            'max' => $request->all()['max'], 
            'min' => $request->all()['min'], 
            'perbedaan' => $perbedaan, 
        ];
        $berat = BeratModel::find($id);
        $berat->update($data);
        return redirect()->route('berat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berat = BeratModel::find($id);
        $berat->delete();
        return back();
    }
}
