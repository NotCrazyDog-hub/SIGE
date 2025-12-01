<?php

namespace App\Http\Controllers;

use App\Models\Intern;
use App\Http\Requests\InternRequest;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interns = Intern::all();
        return view('interns.index', compact('interns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interns.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InternRequest $request)
    {
        try {
            $intern = Intern::create($request->all());
            return redirect()->route('interns.index')->with('success', 'Estagiário cadastrado com sucesso!');
        }
        catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Não foi possível cadastrar o estagiário. Tente novamente.');
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
        $intern = Intern::findOrFail($id);
        return view('interns.edit', compact('intern'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InternRequest $request, string $id)
    {
        try {
            $intern = Intern::findOrFail($id);
            $intern->update($request->except('_token', '_method'));
            return redirect()->route('interns.index')->with('success', 'Estagiário editado com sucesso!');
        }
        catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Não foi possível editar o estagiário. Tente novamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $intern = Intern::findOrFail($id);
        $intern->delete();
        return redirect()->back();
    }
}
