<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $karyawans = Karyawan::where(function ($query) use ($search) {
            $query->where('id', $search)
                  ->orWhere('nama', 'like', "%{$search}%");
        })->paginate(10);

        // index di karyawans
        return view('karyawans.index', compact('karyawans', 'search'));
    }

    

    public function create()
    {
        return view('karyawans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawans.index')->with('success', 'Karyawan created successfully.');
    }

    public function show(Karyawan $karyawan)
    {
        return view('karyawans.show', compact('karyawan'));
    }

    public function edit(Karyawan $karyawan)
    {
        return view('karyawans.edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        $karyawan->update($request->all());

        return redirect()->route('karyawans.index')->with('success', 'Karyawan updated successfully.');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('karyawans.index')->with('success', 'Karyawan deleted successfully.');
    }
}
