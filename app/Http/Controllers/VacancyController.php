<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Models\Department;
use App\Http\Requests\VacancyRequest;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('vacancies.index', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('vacancies.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VacancyRequest $request)
    {
        try {
            $vacancy = Vacancy::create($request->all());
            return redirect()->route('vacancies.index')->with('success', 'Vaga cadastrada com sucesso!');
        }
        catch (Exception $e) {
            return redirect()->back()->with('error', 'Não foi possível cadastrar a vaga. Tente novamente.');
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
        $departments = Department::all();
        $vacancy = Vacancy::findOrFail($id);
        return view('vacancies.edit', compact('vacancy', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VacancyRequest $request, string $id)
    {
        try {
            $vacancy = Vacancy::findOrFail($id);
            $vacancy->update($request->except(['_token', '_method']));
            return redirect()->route('vacancies.index')->with('success', 'Vaga editada com sucesso!');
        }
        catch (Exception $e) {
            return redirect()->back()->with('error', 'Não foi possível editar a vaga. Tente novamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->delete();
        return redirect()->back();
    }
}
