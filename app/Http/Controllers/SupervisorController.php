<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use App\Models\Department;
use App\Http\Requests\SupervisorRequest;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supervisors = Supervisor::all();
        return view('supervisors.index', compact('supervisors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('supervisors.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupervisorRequest $request)
    {
        try {
            $supervisor = Supervisor::create($request->all());
            return redirect()->route('supervisors.index')->with('success', 'Supervisor cadastrado com sucesso!');
        }
        catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Não foi possível cadastrar o supervisor. Tente novamente.');
        }
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
        $supervisor = Supervisor::findOrFail($id);
        $departments = Department::all();
        return view('supervisors.edit', compact('supervisor', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupervisorRequest $request, string $id)
    {
        try {
            $supervisor = Supervisor::findOrFail($id);
            $supervisor->update($request->except(['_token', '_method']));
            return redirect()->route('supervisors.index')->with('success', 'Supervisor editado com sucesso!');
        }
        catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Não foi possível editar o supervisor. Tente novamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supervisor = Supervisor::findOrFail($id);
        $supervisor->delete();
        return redirect()->back();
    }
}
