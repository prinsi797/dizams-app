<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use App\Models\ClientReview;
use App\Models\Contact;
use App\Models\Resume;
use App\Models\Subscribe;
use App\Models\UnSubscribe;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = ClientReview::all();
        return view('frontend.home', compact('reviews'));
    }

    public function contact(Request $request)
    {
        return view('frontend.contact');
    }
    // conatct page 
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        $ownerEmail = 'prinsi@kryzetech.com';
        Mail::to($ownerEmail)->send(new ContactNotification($request->all()));

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }

    public function subscribeStore(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'linkedin' => 'nullable|string',
                'reason' => 'nullable|string',
            ]);
    
            Subscribe::create($validated);
    
            return response()->json(['success' => true, 'message' => 'Action completed successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
    public function unsubscribeStore(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'reason' => 'required',
        ]);

        UnSubscribe::create([
            'name' => $request->name,
            'email' => $request->email,
            'reason' => $request->reason,
        ]);

        return redirect()->back()->with('success', 'You have Unsubscribed successfully!');
    }

    public function resumeStore(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'linkedin' => 'required|string',
            'education' => 'required|string',
            'job_details' => 'required|string',
            'resume' => 'required|mimes:pdf|max:2048',
            'job_description' => 'nullable|string',
        ]);

        // Handle the file upload for the resume
        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Store the resume data in the database
        Resume::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'linkedin' => $request->linkedin,
            'education' => $request->education,
            'job_details' => $request->job_details,
            'resume' => $resumePath,
            'job_description' => $request->job_description,
        ]);

        // Redirect or return success response
        return redirect()->back()->with('success', 'Your resume has been submitted successfully!');
    }
}
