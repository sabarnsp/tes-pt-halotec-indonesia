<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
	// controller ui

	public function index()
	{
		return view('page.pasien.index', [
	        'title' => 'Data Pasien',
	        'pasien' => Pasien::all()
    	]);
	}

	public function detail($id)
	{
		return view('page.pasien.detail', [
			'title' => 'Detail Data Pasien',
			'pasien' => Pasien::find($id)
		]);
	}

	public function search()
	{
		return view('page.pasien.search', [
			'title' => 'Search Pasien',
			'pasien' => Pasien::select('usia_ibu')->distinct()->orderBy('usia_ibu')->get()
		]);
	}

	public function showsearch(Request $request)
	{
		$this->validate($request, [
			"param1" => "required",
			"param2" => "required",
			"start"=> "required",
			"end"=> "required"
		]);

		return view('page.pasien.showsearch', [
			'title' => 'Report Pasien',			
			'pasien' => Pasien::where($request->param1, $request->param2)->whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get()
			
		]);
	}

	public function report()
	{
		return view('page.pasien.report', [
			'title' => 'Report Pasien'
			
		]);
	}

	public function showreport(Request $request)
	{
		$this->validate($request, [
			"start"=> "required",
			"end"=> "required"
		]);

		return view('page.pasien.showreport', [
			'title' => 'Report Pasien',
			'start' => $request->start,
			'end' => $request->end,

			'pasien' => Pasien::whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get(),

			'lahir_sehat' => Pasien::where('kondisi_bayi', 'sehat')->whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get(),
			'lahir_cacat' => Pasien::where('kondisi_bayi', 'cacat')->whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get(),
			'lahir_meninggal' => Pasien::where('kondisi_bayi', 'meninggal')->whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get(),

			'lahir_laki_laki' => Pasien::where('gender_bayi', 'laki-laki')->whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get(),
			'lahir_perempuan' => Pasien::where('gender_bayi', 'perempuan')->whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get(),

			'lahir_normal' => Pasien::where('proses_partus', 'normal')->whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get(),
			'lahir_dibantu' => Pasien::where('proses_partus', 'dibantu alat')->whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get(),
			'lahir_caesar' => Pasien::where('proses_partus', 'caesar')->whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get(),
			'lahir_waterbirth' => Pasien::where('proses_partus', 'waterbirth')->whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get(),

			'usia_kehamilan' => Pasien::whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->average('usia_kehamilan')
			
		]);
	}

	public function store(){
		return view('page.pasien.store', [
			'title' => 'Tambah Data Pasien'
		]);
	}

	public function create(Request $request)
	{
		$this->validate($request, [
			"nama_ibu" => "required",
			"usia_ibu" => "required",
			"usia_kehamilan"=> "required",
			"gender_bayi"=> "required",
			"panjang_bayi"=> "required",
			"berat_bayi"=> "required",
			"tanggal_persalinan"=> "required",
			"jam_persalinan"=> "required",
			"proses_partus"=> "required",
			"kondisi_bayi"=> "required",
			"alamat"=> "required",
			"nama_ayah"=> "required",
			"no_telefon_darurat"=> "required",
			"anak_ke_berapa"=> "required"
		]);

		$data = $request->all();
		$pasien = Pasien::create($data);

		return redirect('/pasien');
	}

	public function show($id)
	{
		return view('page.pasien.update', [
			'title' => 'Update Data Pasien',
			'pasien' => Pasien::find($id)
		]);
	}

	public function update(Request $request, $id)
	{
		$pasien = Pasien::find($id);
		if (!$pasien) {
			return redirect('/pasien');
		}

		$this->validate($request, [
			"nama_ibu" => "required",
			"usia_ibu" => "required",
			"usia_kehamilan"=> "required",
			"gender_bayi"=> "required",
			"panjang_bayi"=> "required",
			"berat_bayi"=> "required",
			"tanggal_persalinan"=> "required",
			"jam_persalinan"=> "required",
			"proses_partus"=> "required",
			"kondisi_bayi"=> "required",
			"alamat"=> "required",
			"nama_ayah"=> "required",
			"no_telefon_darurat"=> "required",
			"anak_ke_berapa"=> "required"
		]);

		$data = $request->all();
		$pasien->fill($data);
		$pasien->save();

		return redirect('/pasien');
	}

	public function destroy($id)
	{
		$pasien = Pasien::find($id);

		if (!$pasien) {
			return redirect('/pasien');
		}

		$pasien->delete();

		return redirect('/pasien');
	}


	// controller restfull api

	public function indexApi()
    {
        $pasien = Pasien::all();
        return response()->json($pasien);
    }

    public function showApi($id)
    {
        $pasien = Pasien::find($id);
        return response()->json($pasien);
    }

    public function searchApi(Request $request)
    {
    	$this->validate($request, [
    		"param1" => "required",
    		"param2" => "required",
    		"start" => "required",
    		"end" => "required"
    	]);

    	$pasien = Pasien::where($request->param1, $request->param2)->whereDate('tanggal_persalinan', '>=', $request->start)->whereDate('tanggal_persalinan', '<=', $request->end)->get();
    	return response()->json($pasien);
    }

    public function createApi(Request $request)
    {
        $this->validate($request, [
            "nama_ibu" => "required",
            "usia_ibu" => "required",
            "usia_kehamilan"=> "required",
            "gender_bayi"=> "required",
            "panjang_bayi"=> "required",
            "berat_bayi"=> "required",
            "tanggal_persalinan"=> "required",
            "jam_persalinan"=> "required",
            "proses_partus"=> "required",
            "kondisi_bayi"=> "required",
            "alamat"=> "required",
            "nama_ayah"=> "required",
            "no_telefon_darurat"=> "required",
            "anak_ke_berapa"=> "required"
        ]);

        $data = $request->all();
        $pasien = Pasien::create($data);

        return response()->json($pasien);
    }

    public function updateApi(Request $request, $id)
    {
        $pasien = Pasien::find($id);
        if (!$pasien) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $this->validate($request, [
            "nama_ibu" => "required",
            "usia_ibu" => "required",
            "usia_kehamilan"=> "required",
            "gender_bayi"=> "required",
            "panjang_bayi"=> "required",
            "berat_bayi"=> "required",
            "tanggal_persalinan"=> "required",
            "jam_persalinan"=> "required",
            "proses_partus"=> "required",
            "kondisi_bayi"=> "required",
            "alamat"=> "required",
            "nama_ayah"=> "required",
            "no_telefon_darurat"=> "required",
            "anak_ke_berapa"=> "required"
        ]);

        $data = $request->all();
        $pasien->fill($data);
        $pasien->save();

        return response()->json($pasien);
    }

    public function destroyApi($id)
    {
        $pasien = Pasien::find($id);

        if (!$pasien) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $pasien->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
        
    }


}