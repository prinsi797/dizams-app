<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;


class SettingController extends Controller {
    // public function index() {
    //     $settings = Setting::all();
    //     return view('settings.index', compact('settings'));
    // }

    public function index() {
        $settings = Setting::all();
        return view('settings.index', compact('settings'));
    }

    public function create() {
        return view('settings.create');
    }

    public function store(Request $request) {
        $request->validate([
            'keyword' => 'required',
            'value' => 'required'
        ]);

        Setting::create($request->all());
        return redirect()->route('settings.index')
            ->with('success', 'Setting created successfully.');
    }

    public function edit(Setting $setting) {
        return view('settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting) {
        $request->validate([
            'keyword' => 'required',
            'value' => 'required'
        ]);

        $setting->update($request->all());
        return redirect()->route('settings.index')
            ->with('success', 'Setting updated successfully.');
    }

    public function destroy(Setting $setting) {
        $setting->delete();
        return redirect()->route('settings.index')
            ->with('success', 'Setting deleted successfully.');
    }
    // public function edit() {
    //     $contact = Setting::first();
    //     return view('contacts.edit', compact('contact'));
    // }

    // public function update(Request $request) {
    //     $validated = $request->validate([
    //         'email' => 'required|email',
    //         'address1' => 'required|string',
    //         'address2' => 'required|string',
    //         'address3' => 'required|string',
    //         'phone1' => 'required|string',
    //         'phone2' => 'required|string',
    //     ]);

    //     $contact = Setting::first();
    //     if ($contact) {
    //         $contact->update($validated);
    //     } else {
    //         Setting::create($validated);
    //     }

    //     return redirect()->back()->with('success', 'Contact information updated successfully.');
    // }
    // public function edit(Setting $setting) {

    //     return view('settings.edit', compact('setting'));
    // }

    // public function update(Request $request, Setting $setting) {
    //     $request->validate([
    //         'phone1' => 'required',
    //         'phone2' => 'required',
    //         'email' => 'required',
    //         'address1' => 'required',
    //         'address2' => 'required',
    //         'address3' => 'required',
    //     ]);

    //     $data = $request->all();

    //     $setting->update($data);
    //     return redirect()->route('settings.index')->with('success', 'Settings updated successfully.');
    // }
}
