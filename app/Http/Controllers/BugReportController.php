<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\BugReport;

class BugReportController extends Controller
{
    public function store(Request $request)
    {
        Log::info('BUG REPORT SUBMIT', $request->except('proof'));

        $request->validate([
            'subject'     => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'proof'       => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $filename = time().'_'.$request->file('proof')->getClientOriginalName();
        $request->file('proof')->move(public_path('images/bug'), $filename);

        DB::table('bug_reports')->insert([
            'subject'     => $request->subject,
            'description' => $request->description,
            'proof'       => 'images/bug/'.$filename,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        Log::info('BUG REPORT INSERTED');

        return back()->with('success', true);


    }

}
