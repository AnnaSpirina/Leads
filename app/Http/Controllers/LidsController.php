<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lid;
use Illuminate\Support\Facades\DB;
use App\Models\Status;

class LidsController extends Controller
{
    public function add(Request $request) {
        $request->validate([
            "first-name" => 'required|string|max:20',
            "last-name" => 'required|string|max:20',
            "phone" => 'required|string|min:12|max:12',
            "email" => 'required|string|email|max:40',
            "message" => 'required|string'
        ]);

        DB::transaction(function () use ($request) {
            $lid = Lid::create([
                "name" => $request->input('first-name'),
                "surname" => $request->input('last-name'),
                "phone" => $request->input('phone'),
                "email" => $request->input('email'),
                "text" => $request->input('message'),
                'status_id' => Status::where('name', 'Новый')->first()->id,
            ]);
        });

        return redirect()->route('index')->with('success', 'Форма успешно отправлена');
    }

    public function index()
    {
        $lids = Lid::with('status')->get();
        $statuses = Status::all();
        return view('index', compact('lids', 'statuses'));
    }

    public function delete($id)
    {
        Lid::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Лид успешно удален');
    }
}
