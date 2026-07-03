<?php

namespace App\Http\Controllers;

use App\Models\InformasiItem;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return view('pages.beranda');
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function tim()
    {
        return view('pages.tim');
    }

    public function kordes()
    {
        return view('pages.kordes');
    }

    public function sekben()
    {
        return view('pages.sekben');
    }

    public function acara()
    {
        return view('pages.acara');
    }

    public function humas()
    {
        return view('pages.humas');
    }

    public function perkapKonsum()
    {
        return view('pages.perkap-konsum');
    }

    public function sakukan()
    {
        return view('pages.sekben');
    }

    public function informasi()
    {
        $informasiItems = InformasiItem::all();
        return view('pages.informasi', compact('informasiItems'));
    }

    public function peta()
    {
        return view('pages.peta');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }

    public function pdd()
    {
        return view('pages.pdd');
    }

    public function admin()
    {
        return view('pages.admin');
    }

    public function kelolaInformasi(Request $request)
    {
        if ($request->isMethod('post')) {
            // Handle file upload
            $gambarPath = null;
            if ($request->hasFile('gambar')) {
                $gambarPath = $request->file('gambar')->store('informasi', 'public');
            }

            // Create new informasi item
            InformasiItem::create([
                'judul' => $request->input('judul'),
                'deskripsi' => $request->input('deskripsi'),
                'gambar' => $gambarPath,
            ]);

            return redirect()->back()->with('success', 'Informasi berhasil ditambahkan!');
        }

        $informasiItems = InformasiItem::all();
        return view('pages.kelola-informasi', compact('informasiItems'));
    }

    public function editInformasi($id)
    {
        $item = InformasiItem::find($id);
        if (!$item) {
            return redirect()->route('kelola-informasi')->with('error', 'Informasi tidak ditemukan!');
        }
        return view('pages.edit-informasi', compact('item'));
    }

    public function updateInformasi(Request $request, $id)
    {
        $item = InformasiItem::find($id);
        if (!$item) {
            return redirect()->route('kelola-informasi')->with('error', 'Informasi tidak ditemukan!');
        }

        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|max:5120',
        ]);

        // Handle file upload
        $gambarPath = $item->gambar;
        if ($request->hasFile('gambar')) {
            // Delete old image if exists
            if ($item->gambar && \Storage::disk('public')->exists($item->gambar)) {
                \Storage::disk('public')->delete($item->gambar);
            }
            $gambarPath = $request->file('gambar')->store('informasi', 'public');
        }

        // Update item
        $item->update([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('kelola-informasi')->with('success', 'Informasi berhasil diperbarui!');
    }

    public function deleteInformasi($id)
    {
        $item = InformasiItem::find($id);
        if ($item) {
            if ($item->gambar && \Storage::disk('public')->exists($item->gambar)) {
                \Storage::disk('public')->delete($item->gambar);
            }
            $item->delete();
        }
        return redirect()->back()->with('success', 'Informasi berhasil dihapus!');
    }
}
