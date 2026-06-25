<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payslip - {{ $payroll->employee->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Courier New', Courier, monospace; background: #e2e8f0; padding: 20px; }
        .payslip { background: #fff; max-width: 800px; margin: 0 auto; padding: 40px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .header { border-bottom: 2px solid #000; padding-bottom: 20px; margin-bottom: 20px; text-align: center; }
        .details-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px; }
        .amounts-table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        .amounts-table th, .amounts-table td { padding: 10px; border-bottom: 1px solid #ccc; text-align: left; }
        .amounts-table th { background: #f8fafc; }
        .total-row { font-weight: bold; font-size: 1.2em; background: #f1f5f9; }
        .footer { text-align: center; margin-top: 50px; color: #64748b; font-size: 0.9em; border-top: 1px solid #ccc; padding-top: 20px; }
    </style>
</head>
<body>
    <div class="payslip">
        <div class="header">
            <h1 class="text-3xl font-bold uppercase tracking-widest">CHRIS ENTERPRISE</h1>
            <p class="text-gray-500">Official Employee Payslip Document</p>
        </div>

        <div class="details-grid text-sm">
            <div>
                <p><strong>Employee Name:</strong> {{ $payroll->employee->name }}</p>
                <p><strong>Employee ID:</strong> EMP-{{ str_pad($payroll->employee->id, 4, '0', STR_PAD_LEFT) }}</p>
                <p><strong>Department:</strong> {{ $payroll->employee->department->name ?? 'N/A' }}</p>
                <p><strong>Position:</strong> {{ $payroll->employee->position->name ?? 'N/A' }}</p>
            </div>
            <div class="text-right">
                <p><strong>Month:</strong> {{ date('F', mktime(0, 0, 0, $payroll->month, 10)) }}</p>
                <p><strong>Year:</strong> {{ $payroll->year }}</p>
                <p><strong>Issue Date:</strong> {{ now()->format('d M Y') }}</p>
            </div>
        </div>

        <table class="amounts-table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th class="text-right">Amount (IDR)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Basic Salary</td>
                    <td class="text-right">Rp {{ number_format($payroll->basic_salary, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Deductions (Taxes/Absence)</td>
                    <td class="text-right text-red-600">- Rp {{ number_format($payroll->deductions, 0, ',', '.') }}</td>
                </tr>
                <tr class="total-row">
                    <td>NET TAKE HOME PAY</td>
                    <td class="text-right text-green-700">Rp {{ number_format($payroll->net_salary, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>

        <div class="flex justify-between mt-16">
            <div class="text-center">
                <p class="mb-12">Authorized by (HR Manager)</p>
                <p class="font-bold border-t border-black inline-block px-8">Signature</p>
            </div>
            <div class="text-center">
                <p class="mb-12">Received by (Employee)</p>
                <p class="font-bold border-t border-black inline-block px-8">{{ $payroll->employee->name }}</p>
            </div>
        </div>

        <div class="footer">
            <p>This is a system generated document. No physical signature is required for validity.</p>
            <p class="mt-4">
                <button onclick="window.print()" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 no-print">🖨️ Print Document</button>
            </p>
        </div>
    </div>
    <style>
        @media print { .no-print { display: none; } body { background: white; } .payslip { box-shadow: none; padding: 0; } }
    </style>
</body>
</html>
