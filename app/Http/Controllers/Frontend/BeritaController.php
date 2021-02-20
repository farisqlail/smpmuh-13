<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Berita;
use App\Comment;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::latest()->paginate(10);
        $comment = Comment::all();

        return view('admin.berita.index', compact('berita', 'comment'));
    }

    public function home()
    {

        $berita = Berita::latest()->paginate(10);

        return view('frontend.berita.index', compact('berita'));
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;

        // mengambil data dari table pegawai sesuai pencarian data
        $berita = DB::table('beritas')
            ->where('judul', 'like', "%" . $search . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('frontend.berita.index', ['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil Terupload');

        Berita::create([
            'judul' => request('judul'),
            'slug' => str_slug(request('judul')),
            'image' => request('image')->store('beritas'),
            'deskripsi' => request('deskripsi')
        ]);

        return redirect()->route('frontend.berita-admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        $comment = Comment::all();

        return view('frontend.berita.show-berita', ['berita' => $berita, 'comment' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Berita $berita)
    {
        if ($berita->image) {
            \Storage::delete($berita->image);
        }

        Alert::success('Success', 'Berhasil Terupdate');

        // dd($berita);
        $berita->update([
            'judul' => request('judul'),
            'slug' => str_slug(request('judul')),
            'image' => request('image')->store('beritas'),
            'deskripsi' => request('deskripsi')
        ]);

        return redirect()->route('frontend.berita-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        // dd($berita);

        $berita->delete();
        Alert::success('Success', 'Berhasul Dihapus');
        \Storage::delete($berita->image);

        return redirect()->route('frontend.berita-admin.index');
    }
}
