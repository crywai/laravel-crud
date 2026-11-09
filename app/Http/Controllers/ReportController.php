<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();

        return view('report.index', compact('reports'));
    }

    public function destroy(Report $report)
    {
        $report->delete();

        return redirect()->back();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => 'required|string|max:255',
            'description' => 'required|string',
        ], [
            'number.required' => 'Введите номер автомобиля.',
            'number.max' => 'Номер автомобиля слишком длинный.',
            'description.required' => 'Введите описание нарушения.',
        ]);

        Report::create($data);

        return redirect()->route('reports.index');
    }
}
