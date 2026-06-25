<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Payroll;

class PayrollChart extends ChartWidget
{
    protected static ?int $sort = 2;
    protected ?string $heading = 'Grafik Pengeluaran Gaji (Payroll)';

    protected function getData(): array
    {
        // Simple dummy data grouping by month for demonstration
        $payrolls = Payroll::selectRaw('month, sum(net_salary) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $data = [];
        $labels = [];
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        
        for ($i = 1; $i <= 12; $i++) {
            $labels[] = $months[$i-1];
            $data[] = $payrolls[$i] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Total Net Salary (Rp)',
                    'data' => $data,
                    'backgroundColor' => '#3b82f6',
                    'borderColor' => '#2563eb',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
