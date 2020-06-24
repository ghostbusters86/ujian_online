<?php

namespace App\Http\Controllers\Frontend;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('id', 'desc')->get();

        return view('frontend.user.index', compact('questions'));
    }

    public function getQuestion(Request $request)
    {
        $question = Question::find($request->id);

        $result = [
            'id'     => $question->id,
            'course' => $question->course->name
        ];

        return json_encode($result);
    }

    public function answerupload(Request $request)
    {
        $this->validate(
            $request,
            [
                'file'     => 'mimes:pdf,docx|max:5120|required',
            ],
            [
                'file.required' => 'Harap upload jawaban.',
                'file.max'      => 'Batas maksimum upload 5 MB.',
                'file.mimes'    => 'Extensi tidak diperbolehkan'
            ]
        );

        $check_file = Answer::where([['question_id', '=', $request->id], ['user_id', '=', auth()->user()->id]])->first();

        if ($check_file) {
            return redirect('user')->with('toast-error', 'Anda sudah mengupload jawaban.');
        } else {
            $file      = $request->file('file');
            $file_name = date('Ymd') . '_' . auth()->user()->id . '_' . $request->id . '_' . $file->getClientOriginalName();

            if ($file->move('./file/answer/', $file_name)) {
                Answer::create([
                    'file'        => $file_name,
                    'upload_at'   => time(),
                    'user_id'     => auth()->user()->id,
                    'question_id' => $request->id
                ]);

                return redirect('user')->with('toast-success', 'Jawaban berhasil diupload.');
            }
        }
    }
}
