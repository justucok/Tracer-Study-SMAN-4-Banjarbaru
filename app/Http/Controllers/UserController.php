<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Beasiswa;
use App\Models\Event;
use App\Models\Jobfair;
use App\Models\Loker;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    // DASHBOARD FUNCTION
    public function index()
    {
        // dump(Event::all());
        $events = Event::orderBy('created_at', 'desc');
        $jobfairs = Jobfair::orderBy('created_at', 'desc');
        $scholarships = Beasiswa::orderBy('created_at', 'desc');

        if (request()->has('search')) {
            $events = $events->where('event_name', 'like', '%' . request()->get('search', '') . '%');
            $jobfairs = $jobfairs->where('nama_jobfair', 'like', '%' . request()->get('search', '') . '%');
            $scholarships = $scholarships->where('nama_beasiswa', 'like', '%' . request()->get('search', '') . '%');
        }

        return view('users.dashboard', [
            'events' => $events->get(),
            'jobfairs' => $jobfairs->get(),
            'scholarships' => $scholarships->get()
        ]);
    }

    // END DASHBOARD FUNCTION

    // PROFILE FUNCTION

    public function profile()
    {
        // Ambil data pengguna yang sedang login
        $user = auth()->user();

        // Ambil alumni_id dari pengguna yang login
        $alumniId = $user->alumni_id;

        // Cari data alumni berdasarkan alumni_id
        $alumni = Alumni::where('id', $alumniId)->first();

        // Kirim data alumni ke view
        return view('users.profile', ['alumni' => $alumni]);
    }

    public function update(Alumni $alumni) {
        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'birth' => 'required|date',
            'address' => 'required|max:120',
            'phone' => 'required|numeric',
            'graduate' => 'required|numeric',
            'class' => 'required',
            'university' => 'required|min:3',
            'major' => 'required|min:3',
            'job' => 'required|min:3',
            'office_address' => 'required|max:120',
            'achievement' => '',
            'instagram_account' => '',
            'facebook_account' => '',
            'other_account' => '',
        ]);

        $alumni->update($validated);

        return redirect()->route('dashboard')->with('success', 'Data alumni berhasil diubah!!');
    }


    // END PROFILE FUNCTION

    // SURVEY FUNCTION
    public function survey()
    {
        return view('users.survey');
    }

    public function store()
    {
        try {
            $validated = request()->validate([
                'nama' => 'required|min:3|max:40',
                'angkatan' => 'required|numeric',
                'thn_lulus' => 'required|numeric',
                'phone' => 'required|numeric',
            ]);

            Log::info('Validasi berhasil', $validated);

            $survey = Survey::create([
                'nama' => $validated['nama'],
                'angkatan' => $validated['angkatan'],
                'thn_lulus' => $validated['thn_lulus'],
                'phone' => $validated['phone'],
                'kualitas_pengajaran' => request()->input('kualitas_pengajaran', 'tidak_diketahui'),
                'fasilitas_sekolah' => request()->input('fasilitas_sekolah', 'tidak_diketahui'),
                'lingkungan_sekolah' => request()->input('lingkungan_sekolah', 'tidak_diketahui'),
                'dukungan_administrasi' => request()->input('dukungan_administrasi', 'tidak_diketahui'),
                'komunikasi' => request()->input('komunikasi', 'tidak_diketahui'),
                'keterlibatan_ortu' => request()->input('keterlibatan_orangtua', 'tidak_diketahui'),
                'kesejahteraan_siswa' => request()->input('kesejahteraan_siswa', 'tidak_diketahui'),
                'prestasi_akademik' => request()->input('prestasi_akademik', 'tidak_diketahui'),
                'kegiatan_ekskul' => request()->input('kegiatan_ekstrakulikuler', 'tidak_diketahui'),
                'pengalaman_keseluruhan' => request()->input('pengalaman_keseluruhan', 'tidak_diketahui'),
            ]);

            // Log::info('Data survey berhasil ditangkap', $survey);

            // dd($survey);
            $survey->save();
            Log::info('Data berhasil dikirim');

            return redirect()->route('dashboard')->with('success', 'Data survey berhasil ditambahkan!!');
        } catch (\Exception $e) {
            Log::error('Terjadi kesalahan pada saat menyimpan data survey: ' . $e->getMessage());
        }
    }

    // END SURVEY FUNCTION

    // LOKER FUNCTION
    public function loker()
    {
        $loker = Loker::orderBy('created_at', 'desc');
        $jobfairs = Jobfair::orderBy('created_at', 'desc');

        if (request()->has('search')) {
            $loker = $loker->where('judul_loker', 'like', '%' . request()->get('search', '') . '%');
            $jobfairs = $jobfairs->where('nama_jobfair', 'like', '%' . request()->get('search', '') . '%');
        }
        // dd($loker);
        return view('users.loker', [
            'loker' => $loker->get(),
            'jobfairs' => $jobfairs->get(),
        ]);
    }
    // END LOKER FUNCTION

    public function testing()
    {
        return view('testing');
    }

    //
}
