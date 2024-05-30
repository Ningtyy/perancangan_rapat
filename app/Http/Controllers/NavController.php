<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use App\Models\Risalah;
use App\Models\User;
use App\Models\Rapat;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class NavController extends Controller
{
    public function ruangrapat(Request $request){
        $cariruang = $request -> cariruang;
        $ruang = Ruang::where('ruangan', 'like', '%' .$cariruang. '%')->paginate();
        $ruang->appends($request -> all());
        return view('ruangrapat', ['key' => 'ruangrapat', 'ruang' => $ruang]);
    }
    public function tambahruang(){
        return view('tambahruang', ['key' => 'tambahruang']);
    }
    public function simpanruang(Request $request){
        //dd($request->all());

        // Validasi input
        //$request->validate([
        //    'id_ruang' => 'required|string|max:255',
        //    'ruangan' => 'required|string|max:255',
        //]);
        $ruang = Ruang::create([
            'id_ruang' => $request->id_ruang,
            'ruangan' => $request->namaruang,
        ]);
        return redirect('/ruangrapat')->with('success', 'Ruang berhasil ditambahkan');
    }
    
    public function editruang($id){
        $ruang = Ruang::find($id);
        return view('editruang', ['key' => 'tambahruang', 'ruang' => $ruang]);
    }
    public function updateruang($id, Request $request){
        //dd($request->all());

        $ruang = Ruang::find($id);
        $ruang -> id_ruang = $request -> id_ruang;        
        $ruang -> ruangan = $request -> namaruang;
        $ruang -> save();
        return redirect('/ruangrapat');
    }
    public function hapusruang($id){
        $ruang = Ruang::find($id);
        $ruang -> delete();
        return redirect('/ruangrapat');
    }
    public function daftarruang(Request $request){
        $cariruang = $request -> cariruang;
        $ruang = Ruang::where('ruangan', 'like', '%' .$cariruang. '%')->paginate();
        $ruang->appends($request -> all());
        return view('daftarruang', ['key' => 'daftarruang', 'ruang' => $ruang]);
    }


    public function tambahrapat(){
        return view('tambahrapat', ['key' => 'tambahrapat']);
    }

    public function rapat(Request $request){
        $carirapat = $request -> carirapat;
        $rapat = Rapat::where('id_rapat', 'like', '%' .$carirapat. '%')->paginate();
        $rapat->appends($request -> all());
        return view('rapat', ['key' => 'rapat', 'rapat' => $rapat]);
    }
    
    public function simpanrapat(Request $request){
        //dd($request->all());

        // Validasi input
        //$request->validate([
        //    'id_ruang' => 'required|string|max:255',
        //    'ruangan' => 'required|string|max:255',
        //]);
        $rapat = Rapat::create([
            'id_rapat' => $request->id_rapat,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'pimpinan' => $request->pimpinan,
            'jabatan_pimpinan' => $request->jabatan_pimpinan,
            'inisiator' => $request->inisiator,
            'notulis' => $request->notulis,
            'acara' => $request->acara,
            'catatan' => $request->catatan,
        ]);
        return redirect('/rapat');
    }

    public function risalah(){
        return view('risalah', ['key' => 'risalah']);
    }
    public function tambahrisalah($id){
        $rapat = Rapat::find($id);
        return view('tambahrisalah', ['key' => 'tambahrisalah'], compact('rapat'));
    }
    
    public function simpanrisalah(Request $request){
        //dd($request->all());
        /*$risalah = Risalah::create([
            'id_risalah' => $request->id_risalah,
            'hasil' => $request->hasil,
            'dokumentasi' => [
                'document1' => $request->input('document1'),
                'document2' => $request->input('document2'),
            ]
            ]);
        
        */
        dd($request->all());
        $request->validate([
            'id_risalah' => 'required|string',
            'hasil' => 'required|string',
            'document1' => 'required|file|mimes:jpg,jpeg,png,pdf', // validasi file
            'document2' => 'required|file|mimes:jpg,jpeg,png,pdf', // validasi file
        ]);

        $pathDocument1 = $request->file('document1')->store('public/documents');
        $pathDocument2 = $request->file('document2')->store('public/documents');

        $data = [
            'id_risalah' => $request->id_risalah,
            'hasil' => $request->hasil,
            'dokumentasi' => [
                'document1' => $pathDocument1,
                'document2' => $pathDocument2,
            ],
        ];
            // Menyimpan data risalah
            $risalah = Risalah::create($data);

        return redirect('/risalah');
    }

    public function user(){
        $user = User::paginate(5);
        return view('user', ['key' => 'user', 'user' => $user]);
    }
    public function cariuser(Request $request){
        $cari = $request -> cari;
        $user = User::where('name', 'like', '%' .$cari. '%')->paginate();
        $user->appends($request -> all());
        return view('user', ['key' => '', 'user' => $user]);
    }

    
    /*
    public function store(Request $request)
    {
        if ($request->has('add')) {
            // Tambahkan satu kolom input tambahan
            $numFields = $request->input('numFields', 1) + 1;
        }

        // Validasi data
        $validatedData = $request->validate([
            'dynamicField' => 'required|array',
            'dynamicField.*' => 'required|string|max:255',
        ]);

        // Akses nilai input yang dinamis
        $dynamicFields = $validatedData['dynamicField'];

        // Lakukan penyimpanan atau pemrosesan data sesuai kebutuhan
        foreach ($dynamicFields as $field) {
            // Simpan atau proses setiap field
        }
    }
    */

    
}
