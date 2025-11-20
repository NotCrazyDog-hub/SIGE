<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Intern;
use App\Http\Requests\ReportRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all();
        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $interns = Intern::all();
        return view('reports.create', compact('interns'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $report = Report::create($request->all());
        return redirect()->route('reports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $interns = Intern::all();
        $report = Report::findOrFail($id);
        return view('reports.edit', compact('report', 'interns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = Report::findOrFail($id);
        $report->update($request->except('_token', '_method'));
        return redirect()->route('reports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = Report::findOrFail($id);
        $report->delete();
        return redirect()->route('reports.index');
    }
}
