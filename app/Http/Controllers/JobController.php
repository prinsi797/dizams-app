<?php

namespace App\Http\Controllers;

use App\Mail\JobsNotification;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller {
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'description' => 'required|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $resumePath = $request->file('resume')->store('jobs', 'public');

        $job = Job::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'resume' => $resumePath,
        ]);

        // $ownerEmail = 'prinsi@kryzetech.com';
        // Mail::to($ownerEmail)->send(new JobsNotification($job->all()));

        return response()->json(['message' => 'Application submitted successfully!', 'job' => $job], 201);
    }
}
