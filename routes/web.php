<?php

use Illuminate\Support\Facades\Route;
use App\Models\Payroll;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/payrolls/{id}/payslip', function($id) {
    $payroll = Payroll::with(['employee.department', 'employee.position'])->findOrFail($id);
    return view('payslip', compact('payroll'));
})->name('payslip.print');
