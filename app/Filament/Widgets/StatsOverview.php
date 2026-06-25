<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Leave;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Karyawan', Employee::count())
                ->description('Seluruh karyawan aktif')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success'),
                
            Stat::make('Total Departemen', Department::count())
                ->description('Divisi perusahaan')
                ->descriptionIcon('heroicon-m-building-office')
                ->color('info'),
                
            Stat::make('Cuti Pending', Leave::where('status', 'Pending')->count())
                ->description('Menunggu persetujuan HRD')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),
        ];
    }
}
