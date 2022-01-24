<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function videopembelajaran(Request $request)
    {
        $selectedCourse = $request->get('Kursus');
        $selectedSubCourse = $request->get('Sub-Course');

        if ($selectedCourse === 'Inggris') {
            if ($selectedSubCourse === 'Grammar') {
                $link = Guru::all();
                return view('user.inggris.videopembelajaran', ['pages' => 'Kursus Inggris (US) - Grammar'], compact('link'));
            }
        }
    }

    public function update_video(Request $request)
    {
        $id = $request->post('id');

        $validatedData = $request->validate([
            'id' => 'required',
            'link_video' => 'required',
        ]);

        $data = Guru::find($id);
        $data->link_video = $validatedData['link_video'];
        $data->save();

        return redirect('/Guru')->with('success', 'Video Pembelajaran Berhasil Diunggah');
    }

    public function feedback(Request $request)
    {
        $id = $request->post('id');

        $validatedData = $request->validate([
            'id' => 'required',
            'feedback' => 'required',
        ]);

        $data = User::find($id);
        $data->feedback = $validatedData['feedback'];
        $data->save();

        return redirect('/Guru')->with('success', 'Feedback berhasil dikirim');
    }
}