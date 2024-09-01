<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use App\Models\Alumni as ModelsAlumni;
use App\Models\Beasiswa;
use App\Models\Event;
use App\Models\Jobfair;
use App\Models\Loker;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage; // Include this line


class AdminController extends Controller
{
    // Alumni Function

    public function indexAlumni()
    {
        if (!auth()->user()->is_admin) {
            abort(403);
        }

        $alumnis = Alumni::query();

        if (request()->has('search')) {
            $alumnis->where('name', 'like', '%' . request()->get('search') . '%');
        }

        if (request()->has('filter')) {
            $alumnis->where('graduate', request()->get('filter'));
        }

        if (request()->has('filter-button')) {
            $filter = request()->get('filter-button');
            if ($filter === 'minggu_ini') {
                $alumnis->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
            } elseif ($filter === 'bulan_ini') {
                $alumnis->whereMonth('created_at', [now()->startOfMonth(), now()->endOfMonth()]);
            } elseif ($filter === 'tahun_ini') {
                $alumnis->whereMonth('created_at', [now()->startOfYear(), now()->endOfYear()]);
            }
        }

        // Fetch the results after applying search and filter
        $alumnis = $alumnis->get();

        return view('admin.master-alumni', [
            'alumnis' => $alumnis,
        ]);
    }

    public function createAlumni()
    {
        return view('admin.create-alumni');
    }

    public function storeAlumni()
    {
        /* START POST REQUEST DATA */

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
            'achievement' => 'required',
            'instagram_account' => 'required',
            'facebook_account' => 'required',
            'other_account' => 'required',
        ]);

        // dump(request()->get(Alumni::all()));

        $alumni = Alumni::create([
            'name' => $validated['name'],
            'birth' => $validated['birth'],
            'address' => $validated['address'],
            'phone' => $validated['phone'],
            'graduate' => $validated['graduate'],
            'class' => $validated['class'],
            'university' => $validated['university'],
            'major' => $validated['major'],
            'job' => $validated['job'],
            'office_address' => $validated['office_address'],
            'achievement' => $validated['achievement'],
            'instagram_account' => $validated['instagram_account'],
            'facebook_account' => $validated['facebook_account'],
            'other_account' => $validated['other_account'],
            'image_url' => request()->get('image_url', ''),
        ]);
        $alumni->save();

        /* END POST REQEST DATA */

        return redirect()->route('alumnis.index')->with('success', 'Data alumni berhasil ditambahkan!!');
    }

    public function editAlumni(Alumni $alumni)
    {
        $editing = true;

        return view('admin.create-alumni', compact('alumni', 'editing'));
    }

    public function updateAlumni(Alumni $alumni)
    {
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
            'achievement' => 'required',
            'instagram_account' => 'required',
            'facebook_account' => 'required',
            'other_account' => 'required',
        ]);

        $alumni->update($validated);

        return redirect()->route('alumnis.index')->with('success', 'Data alumni berhasil diubah!!');
    }

    public function destroyAlumni(Alumni $alumni)
    {
        $alumni->delete();

        return redirect()->route('alumnis.index')->with('success', 'Data alumni berhasil dihapus!!');
    }

    public function showAlumni()
    {
        $alumnis = Alumni::latest()->get();

        return view('print-out.alumni', [
            'alumnis' => $alumnis,
        ]);
    }

    // End Alumni Function

    // Event Function

    public function indexEvent()
    {
        if (!auth()->user()->is_admin) {
            abort(403);
        }

        $events = Event::orderBy('created_at', 'asc');

        if (request()->has('search')) {
            $events = $events->where('event_name', 'like', '%' . request()->get('search', '') . '%');
        }

        // dump($jobfairs);

        return view('admin.master-event', [
            'events' => $events->get(),
        ]);
    }

    public function createEvent()
    {
        return view('admin.create-event');
    }

    public function storeEvent()
    {
        /* START POST REQUEST DATA */

        $validated = request()->validate([
            'event_name' => 'required|min:3|max:40',
            'event_date' => 'required|date',
            'location' => 'required|max:120',
            'event_time' => 'required',
            'note' => 'required|max:120',
        ]);

        $event = Event::create([
            'event_name' => request()->get('event_name', null),
            'event_date' => request()->get('event_date', null),
            'location' => request()->get('location', null),
            'event_time' => request()->get('event_time', null),
            'note' => request()->get('note', null),
        ]);
        $event->save();

        /* END POST REQEST DATA */

        return redirect()->route('events.index');
    }

    public function editEvent(Event $event)
    {
        $editing = true;

        return view('admin.create-event', compact('event', 'editing'));
    }

    public function updateEvent(Event $event)
    {
        $validated = request()->validate([
            'event_name' => 'required|min:3|max:40',
            'event_date' => 'required|date',
            'location' => 'required|max:120',
            'event_time' => 'required',
            'note' => 'required|max:120',
        ]);

        $event->update($validated);

        return redirect()->route('events.index')->with('success', 'Data event berhasil diubah!!');
    }

    public function destroyEvent(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Data event berhasil dihapus!!');
    }

    public function showEvent()
    {
        $events = Event::latest()->get();

        return view('print-out.event', [
            'events' => $events,
        ]);
    }

    // End Event Function

    // Jobfair Function
    public function indexJobfair()
    {
        if (!auth()->user()->is_admin) {
            abort(403);
        }

        $jobfairs = Jobfair::orderBy('created_at', 'asc');

        if (request()->has('search')) {
            $jobfairs = $jobfairs->where('nama_jobfair', 'like', '%' . request()->get('search', '') . '%');
        }

        // dump($jobfair);

        return view('admin.master-jobfair', [
            'jobfairs' => $jobfairs->get(),
        ]);
    }

    public function createJobfair()
    {
        return view('admin.create-jobfair');
    }

    public function storeJobfair(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'nama_jobfair' => 'required|min:3|max:40',
            'ket_jobfair' => 'required|max:120',
            'url_jobfair' => 'required|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        // Check if the image is uploaded
        if ($request->hasFile('image')) {
            // Debugging: Check file details
            $file = $request->file('image');
            // dd($file->getClientMimeType(), $file->getClientOriginalExtension(), $file->isValid());

            // Store the image and get the path
            $imagePath = $request->file('image')->store('images', 'public');

            // Debugging: Check the stored path
            // dd($imagePath);

            // Create the jobfair record
            Jobfair::create([
                'nama_jobfair' => $validated['nama_jobfair'],
                'ket_jobfair' => $validated['ket_jobfair'],
                'url_jobfair' => $validated['url_jobfair'],
                'image' => $imagePath,
                'tanggal_mulai' => $validated['tanggal_mulai'],
                'tanggal_selesai' => $validated['tanggal_selesai'],
            ]);

            // Redirect to the jobfair index with success message
            return redirect()->route('jobfair.index')->with('success', 'Jobfair created successfully.');
        }

        // Redirect back with an error message if the image upload fails
        return redirect()->back()->withErrors(['image' => 'The image upload failed.']);
    }

    public function editJobfair(Jobfair $jobfair)
    {
        $editing = true;

        return view('admin.create-jobfair', compact('jobfair', 'editing'));
    }

    public function updateJobfair(Request $request, $id)
    {
        $validated = request()->validate([
            'nama_jobfair' => 'required|min:3|max:40',
            'ket_jobfair' => 'required|max:120',
            'url_jobfair' => 'required|url',
            'image' => 'image',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        $jobfair = Jobfair::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($jobfair->image && Storage::exists('public/' . $jobfair->image)) {
                Storage::delete('public/' . $jobfair->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('image', 'public');
            $validated['image'] = $imagePath;
        } else {
            $validated['image'] = $jobfair->image;
        }

        $jobfair->update($validated);

        return redirect()->route('jobfair.index')->with('success', 'Data Jobfair berhasil diubah!!');
    }

    public function destroyJobfair(Jobfair $jobfair)
    {
        $jobfair->delete();

        return redirect()->route('jobfair.index')->with('success', 'Data Jobfair berhasil dihapus!!');
    }

    public function showJobfair()
    {
        $jobfair = Jobfair::latest()->get();

        return view('print-out.jobfair', [
            'jobfairs' => $jobfair,
        ]);
    }

    // end Jobfair Function

    // Beasiswa Function
    public function indexBeasiswa()
    {
        if (!auth()->user()->is_admin) {
            abort(403);
        }

        $beasiswas = Beasiswa::orderBy('created_at', 'asc');

        if (request()->has('search')) {
            $beasiswas = $beasiswas->where('nama_beasiswa', 'like', '%' . request()->get('search', '') . '%');
        }

        // dump($beasiswas);

        return view('admin.master-beasiswa', [
            'beasiswas' => $beasiswas->get(),
        ]);
    }

    public function createBeasiswa()
    {
        return view('admin.create-beasiswa');
    }

    public function storeBeasiswa(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'nama_beasiswa' => 'required|min:3|max:40',
            'ket_beasiswa' => 'required|max:120',
            'url_beasiswa' => 'required|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        // Check if the image is uploaded
        if ($request->hasFile('image')) {
            // Debugging: Check file details
            $file = $request->file('image');
            // dd($file->getClientMimeType(), $file->getClientOriginalExtension(), $file->isValid());

            // Store the image and get the path
            // $imagePath = $file->store('images', 'public');
            $imagePath = $request->file('image')->store('images', 'public');

            // Debugging: Check the stored path
            // dd($imagePath);

            // Create the beasiswa record
            Beasiswa::create([
                'nama_beasiswa' => $validated['nama_beasiswa'],
                'ket_beasiswa' => $validated['ket_beasiswa'],
                'url_beasiswa' => $validated['url_beasiswa'],
                'image' => $imagePath,
                'tanggal_mulai' => $validated['tanggal_mulai'],
                'tanggal_selesai' => $validated['tanggal_selesai'],
            ]);

            // Redirect to the beasiswa index with success message
            return redirect()->route('beasiswa.index')->with('success', 'Beasiswa created successfully.');
        }

        // Redirect back with an error message if the image upload fails
        return redirect()->back()->withErrors(['image' => 'The image upload failed.']);
    }


    public function editBeasiswa(Beasiswa $beasiswa)
    {
        $editing = true;

        return view('admin.create-beasiswa', compact('beasiswa', 'editing'));
    }

    public function updateBeasiswa(Request $request, $id)
    {
        $validated = request()->validate([
            'nama_beasiswa' => 'required|min:3|max:40',
            'ket_beasiswa' => 'required|max:120',
            'url_beasiswa' => 'required|url',
            'image' => 'image',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        $beasiswa = Beasiswa::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($beasiswa->image && Storage::exists('public/' . $beasiswa->image)) {
                Storage::delete('public/' . $beasiswa->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('image', 'public');
            $validated['image'] = $imagePath;
        } else {
            $validated['image'] = $beasiswa->image;
        }

        $beasiswa->update($validated);

        return redirect()->route('beasiswa.index')->with('success', 'Data Beasiswa berhasil diubah!!');
    }



    public function destroyBeasiswa(Beasiswa $beasiswa)
    {
        $beasiswa->delete();

        return redirect()->route('beasiswa.index')->with('success', 'Data beasiswa berhasil dihapus!!');
    }

    public function showBeasiswa()
    {
        $schollarships = Beasiswa::latest()->get();

        return view('print-out.beasiswa', [
            'beasiswa' => $schollarships,
        ]);
    }

    // end Beasiswa Function

    // University Function

    public function indexUniversity()
    {
        if (!auth()->user()->is_admin) {
            abort(403);
        }

        $alumnis = Alumni::query();

        if (request()->has('search')) {
            $alumnis->where('name', 'like', '%' . request()->get('search') . '%');
        }

        if (request()->has('filter')) {
            $alumnis->where('graduate', request()->get('filter'));
        }

        if (request()->has('filter-button')) {
            $filter = request()->get('filter-button');
            if ($filter === 'minggu_ini') {
                $alumnis->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
            } elseif ($filter === 'bulan_ini') {
                $alumnis->whereMonth('created_at', [now()->startOfMonth(), now()->endOfMonth()]);
            } elseif ($filter === 'tahun_ini') {
                $alumnis->whereMonth('created_at', [now()->startOfYear(), now()->endOfYear()]);
            }
        }

        // Fetch the results after applying search and filter
        $alumnis = $alumnis->get();

        return view('admin.master-university', [
            'alumnis' => $alumnis,
        ]);
    }

    public function showUniversity()
    {
        $alumnis = Alumni::latest()->get();

        return view('print-out.university', [
            'alumnis' => $alumnis,
        ]);
    }

    // End University Function

    // Job Function
    public function indexJob()
    {
        if (!auth()->user()->is_admin) {
            abort(403);
        }

        $alumnis = Alumni::query();

        if (request()->has('search')) {
            $alumnis->where('name', 'like', '%' . request()->get('search') . '%');
        }

        if (request()->has('filter')) {
            $alumnis->where('graduate', request()->get('filter'));
        }

        if (request()->has('filter-button')) {
            $filter = request()->get('filter-button');
            if ($filter === 'minggu_ini') {
                $alumnis->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
            } elseif ($filter === 'bulan_ini') {
                $alumnis->whereMonth('created_at', [now()->startOfMonth(), now()->endOfMonth()]);
            } elseif ($filter === 'tahun_ini') {
                $alumnis->whereMonth('created_at', [now()->startOfYear(), now()->endOfYear()]);
            }
        }

        // Fetch the results after applying search and filter
        $alumnis = $alumnis->get();

        return view('admin.master-Job', [
            'alumnis' => $alumnis,
        ]);
    }

    public function showJob()
    {
        $alumnis = Alumni::latest()->get();

        return view('print-out.job', [
            'alumnis' => $alumnis,
        ]);
    }

    // End Job Function

    // Data Tambahan Function

    public function indexInformation()
    {
        if (!auth()->user()->is_admin) {
            abort(403);
        }

        $alumnis = Alumni::query();

        if (request()->has('search')) {
            $alumnis->where('name', 'like', '%' . request()->get('search') . '%');
        }

        if (request()->has('filter')) {
            $alumnis->where('graduate', request()->get('filter'));
        }

        if (request()->has('filter-button')) {
            $filter = request()->get('filter-button');
            if ($filter === 'minggu_ini') {
                $alumnis->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
            } elseif ($filter === 'bulan_ini') {
                $alumnis->whereMonth('created_at', [now()->startOfMonth(), now()->endOfMonth()]);
            } elseif ($filter === 'tahun_ini') {
                $alumnis->whereMonth('created_at', [now()->startOfYear(), now()->endOfYear()]);
            }
        }

        // Fetch the results after applying search and filter
        $alumnis = $alumnis->get();

        return view('admin.master-information', [
            'alumnis' => $alumnis,
        ]);
    }

    public function showInformation()
    {
        $alumnis = Alumni::latest()->get();

        return view('print-out.information', [
            'alumnis' => $alumnis,
        ]);
    }

    // End Data Tambahan Function

    // Survey Function

    public function indexSurvey()
    {
        if (!auth()->user()->is_admin) {
            abort(403);
        }

        $surveys = Survey::orderBy('created_at', 'asc');

        if (request()->has('search')) {
            $surveys = $surveys->where('nama', 'like', '%' . request()->get('search', '') . '%');
        }

        // dump($survey);

        return view('admin.master-survey', [
            'surveys' => $surveys->get(),
        ]);
    }


    public function editSurvey(Survey $survey)
    {
        // dd($survey->id);

        return view('admin.show-survey', compact('survey'));
    }

    public function showSurvey()
    {
        $surveys = Survey::latest()->get();

        return view('print-out.survey', [
            'surveys' => $surveys,
        ]);
    }

    // End Survey Function

    // Loker Function

    public function indexLoker()
    {
        if (!auth()->user()->is_admin) {
            abort(403);
        }

        $lokers = Loker::orderBy('created_at', 'asc');

        if (request()->has('search')) {
            $lokers = $lokers->where('judul_loker', 'like', '%' . request()->get('search', '') . '%');
        }

        // dump($jobfair);

        return view('admin.master-loker', [
            'lokers' => $lokers->get(),
        ]);
    }

    public function createLoker()
    {
        return view('admin.create-loker');
    }

    public function storeLoker(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'judul_loker' => 'required|min:3|max:40',
            'nama_penyedia' => 'required|max:120',
            'deskripsi' => 'required|max:120',
            'kualifikasi' => 'required|max:120',
            'alamat' => 'required|max:120',
            'email' => 'required|email|max:120',
            'phone' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);
        // dd($validated);

        $loker = Loker::create([
            'judul_loker' => $validated['judul_loker'],
            'nama_penyedia' => $validated['nama_penyedia'],
            'deskripsi' => $validated['deskripsi'],
            'kualifikasi' => $validated['kualifikasi'],
            'alamat' => $validated['alamat'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'tanggal' => $validated['tanggal'],
        ]);
        $loker->save();

        // Redirect to the loker index with success message
        return redirect()->route('loker.index')->with('success', 'Loker created successfully');
    }

    public function editLoker(Loker $loker)
    {
        $editing = true;

        return view('admin.create-loker', compact('loker', 'editing'));
    }

    public function updateLoker(Request $request, $id)
    {
        $validated = request()->validate([
            'judul_loker' => 'required|min:3|max:40',
            'nama_penyedia' => 'required|max:120',
            'deskripsi' => 'required|max:120',
            'kualifikasi' => 'required|max:120',
            'alamat' => 'required|max:120',
            'email' => 'required|max:120',
            'phone' => 'required|max:120',
            'tanggal' => 'required|date'
        ]);

        $loker = Loker::findOrFail($id);

        $loker->update($validated);

        return redirect()->route('loker.index')->with('success', 'Data Loker berhasil diubah!!');
    }

    public function destroyLoker(Loker $loker)
    {
        $loker->delete();

        return redirect()->route('loker.index')->with('success', 'Data Loker berhasil dihapus!!');
    }

    public function showLoker()
    {
        $loker = Loker::latest()->get();

        return view('print-out.loker', [
            'lokers' => $loker,
        ]);
    }

    // End Loker Function

}
