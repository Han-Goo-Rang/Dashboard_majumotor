<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Employee;
 
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::orderBy('created_at', 'DESC')->get();
  
        return view('employees.index', compact('employee'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Employee::create($request->all());
 
        return redirect()->route('employees')->with('success', 'Karyawan berhasil ditambahkan!');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id);
  
        return view('employees.show', compact('employee'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
  
        return view('employees.edit', compact('employee'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::findOrFail($id);
  
        $employee->update($request->all());
  
        return redirect()->route('employees')->with('success', 'Karyawan {$id} berhasil diperbaharui!');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
  
        $employee->delete();
  
        return redirect()->route('employees')->with('success', 'Karyawan {$id} berhasil dihapus!');
    }
}