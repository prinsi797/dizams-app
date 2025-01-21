<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use App\Mail\ResumeNotification;
use App\Mail\SubscribeNotification;
use App\Models\About;
use App\Models\Article;
use App\Models\ClientReview;
use App\Models\Contact;
use App\Models\JobOpening;
use App\Models\Order;
use App\Models\OrderPrice;
use App\Models\Rating;
use App\Models\Resume;
use App\Models\ResumePackage;
use App\Models\Setting;
use App\Models\Subscribe;
use App\Models\UnSubscribe;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller {

    public function index() {
        $reviews = ClientReview::where('approved', 1)->get();
        $ratings = Rating::all();
        $articles = Article::all();
        return view('frontend.home', compact('reviews', 'articles', 'ratings'));
    }

    public function contact(Request $request) {
        $settings = Setting::all()->groupBy('keyword');
        $abouts = About::all();
        return view('frontend.contact', compact('settings', 'abouts'));
    }

    public function resume(Request $request) {
        $packages = ResumePackage::where('is_active', true)->get();
        $orders = OrderPrice::all();
        return view('frontend.resume', compact('orders', 'packages'));
    }

    public function about(Request $request) {
        return view('frontend.abouts');
    }

    public function jobsOpening(Request $request) {
        $jobs = JobOpening::where('is_active', true)->get();
        return view('frontend.jobs', compact('jobs'));
    }
    // conatct page
    public function send(Request $request) {

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

        $resumePath = $request->file('resume')->store('resumes', 'public');

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

        $resumeData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'linkedin' => $request->linkedin,
            'education' => $request->education,
            'job_details' => $request->job_details,
            'resume' => $resumePath,
            'job_description' => $request->job_description,
        ];

        // Send the email with the resume attachment
        $ownerEmail = 'prinsi@kryzetech.com';
        Mail::to($ownerEmail)->send(new ResumeNotification($resumeData));


        return redirect()->back()->with('success', 'Your resume has been submitted successfully!');
    }
    public function reviewStore(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public'); // Store image in storage/app/public/posts
        }
        ClientReview::create($data);
        return redirect()->back()->with('success', 'Review added successfully!');
    }
}
