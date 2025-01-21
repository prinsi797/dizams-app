<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use App\Exports\ResumesExport;
use Maatwebsite\Excel\Facades\Excel;

class ResumeController extends Controller {
    public function index(Request $request) {
        $query = Resume::query();
        if ($request->filled('search_name')) {
            $query->where('name', 'LIKE', '%' . $request->search_name . '%');
        }
        if ($request->filled('search_email')) {
            $query->where('email', 'LIKE', '%' . $request->search_email . '%');
        }
        if ($request->filled('search_phone')) {
            $query->where('phone', 'LIKE', '%' . $request->search_phone . '%');
        }
        $resumes = $query->paginate(10);

        return view('resumes.index', compact('resumes'));
    }

    public function export() {
        return Excel::download(new ResumesExport, 'resumes.xlsx');
    }
}