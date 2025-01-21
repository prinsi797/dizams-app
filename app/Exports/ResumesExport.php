<?php

namespace App\Exports;

use App\Models\Resume;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ResumesExport implements FromCollection, WithHeadings, WithMapping {
    public function collection() {
        return Resume::all();
    }

    public function headings(): array {
        return [
            'ID',
            'Name',
            'Email',
            'Phone',
            'LinkedIn',
            'Education',
            'Job Details',
            'Resume File'
        ];
    }

    public function map($resume): array {
        return [
            $resume->id,
            $resume->name,
            $resume->email,
            $resume->phone,
            $resume->linkedin ?? 'N/A',
            $resume->education,
            $resume->job_details,
            $resume->resume ? url('storage/' . $resume->resume) : 'N/A'
        ];
    }
}
