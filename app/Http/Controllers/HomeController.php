<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use App\Mail\ResumeNotification;
use App\Mail\SubscribeNotification;
use App\Models\Article;
use App\Models\ClientReview;
use App\Models\Contact;
use App\Models\Rating;
use App\Models\Resume;
use App\Models\Subscribe;
use App\Models\UnSubscribe;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller {
    public function index() {
        $reviews = ClientReview::all();
        $ratings = Rating::all();
        $articles = Article::all();
        return view('frontend.home', compact('reviews', 'articles', 'ratings'));
    }

    public function contact(Request $request) {
        return view('frontend.contact');
    }

    public function resume(Request $request) {
        return view('frontend.resume');
    }

    public function about(Request $request) {
        return view('frontend.abouts');
    }
    // conatct page
    public function send(Request $request) {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'subject' => 'required|string|max:255',
        //     'message' => 'required|string',
        // ]);

        // Contact::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'subject' => $request->subject,
        //     'message' => $request->message,
        // ]);

        // $ownerEmail = 'prinsi@kryzetech.com';
        // Mail::to($ownerEmail)->send(new ContactNotification($request->all()));

        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            Contact::create($validated);

            $ownerEmail = 'prinsi@kryzetech.com';
            Mail::to($ownerEmail)->send(new ContactNotification($request->all()));

            return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
    public function subscribeStore(Request $request) {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'linkedin' => 'nullable|string',
                'reason' => 'nullable|string',
            ]);

            Subscribe::create($validated);

            $ownerEmail = 'prinsi@kryzetech.com';
            Mail::to($ownerEmail)->send(new SubscribeNotification($request->all()));

            return response()->json(['success' => true, 'message' => 'Action completed successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function resumeStore(Request $request) {
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

        // Store the uploaded resume file
        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Store resume data in the database
        Resume::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'linkedin' => $request->linkedin,
            'education' => $request->education,
            'job_details' => $request->job_details,
            'resume' => $resumePath,  // Store the resume file path
            'job_description' => $request->job_description,
        ]);

        // Prepare the resume data to send in the email
        $resumeData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'linkedin' => $request->linkedin,
            'education' => $request->education,
            'job_details' => $request->job_details,
            'resume' => $resumePath,  // Include the resume file path in the email data
            'job_description' => $request->job_description,
        ];

        // Send the email with the resume attachment
        $ownerEmail = 'prinsi@kryzetech.com';
        Mail::to($ownerEmail)->send(new ResumeNotification($resumeData));


        return redirect()->back()->with('success', 'Your resume has been submitted successfully!');
    }
}
