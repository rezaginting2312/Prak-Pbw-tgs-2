<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use Filament\Widgets\ChartWidget;

class BooksStatusChart extends ChartWidget
{
    protected static ?string $heading = 'Books: Available vs Borrowed';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Books',
                    'data' => [
                        Book::where('status', 'available')->count(),
                        Book::where('status', 'borrowed')->count(),
                    ],
                ],
            ],
            'labels' => ['Available', 'Borrowed'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
