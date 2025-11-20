<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalAuthors extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Authors', Author::count())
                ->description('Jumlah penulis')
                ->icon('heroicon-o-user-group'),
        ];
    }
}
