<?php

namespace App\Http\Controllers;

use App\Models\JobOpening;
use Illuminate\Http\Request;

class JobOpeningController extends Controller {
    public function index() {
        $jobs = JobOpening::all();
        return view('jobs.index', compact('jobs'));
    }

    public function create() {
        return view('jobs.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'job_type' => 'required|in:Full-time,Contract,C2H',
            'category' => 'nullable',
            'description' => 'required',
            'benefits' => 'nullable',
            'company_name' => 'nullable',
            'responsibilities' => 'nullable',
        ]);
        $validated['requirements'] = json_encode($request->requirements);
        $validated['benefits'] = json_encode($request->benefits);

        JobOpening::create($validated);
        return redirect()->route('jobs.index');
    }

    public function edit(JobOpening $job) {
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, JobOpening $job) {
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'job_type' => 'required|in:Full-time,Contract,C2H',
            'category' => 'nullable',
            'description' => 'required',
            'requirements' => 'nullable',
            'benefits' => 'nullable',
            'company_name' => 'nullable',
            'responsibilities' => 'nullable',
        ]);

        $job->update($request->all());
        return redirect()->route('jobs.index')
            ->with('success', 'jobOpening updated successfully.');
    }

    public function destroy(JobOpening $job) {
        $job->delete();
        return redirect()->route('jobs.index')
            ->with('success', 'jobs deleted successfully.');
    }
}
