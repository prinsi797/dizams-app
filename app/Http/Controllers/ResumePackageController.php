<?php

namespace App\Http\Controllers;

use App\Models\ResumePackage;
use Illuminate\Http\Request;

class ResumePackageController extends Controller {
    public function index() {
        $packages = ResumePackage::all();
        return view('packages.index', compact('packages'));
    }

    public function create() {
        return view('packages.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string',
            'resume_count' => 'required|integer',
            'original_price' => 'required|numeric',
            'discounted_price' => 'required|numeric',
            'per_resume_price' => 'required|numeric',
            'modal_type' => 'required|string',
        ]);

        ResumePackage::create($validated);
        return redirect()->route('packages.index')->with('success', 'Package created successfully');
    }

    public function edit(ResumePackage $package) {
        return view('packages.edit', compact('package'));
    }

    public function update(Request $request, ResumePackage $package) {
        $validated = $request->validate([
            'title' => 'required|string',
            'resume_count' => 'required|integer',
            'original_price' => 'required|numeric',
            'discounted_price' => 'required|numeric',
            'per_resume_price' => 'required|numeric',
            'modal_type' => 'required|string',
        ]);

        $package->update($validated);
        return redirect()->route('packages.index')->with('success', 'Package updated successfully');
    }

    public function destroy(ResumePackage $package) {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'Package deleted successfully');
    }
}
