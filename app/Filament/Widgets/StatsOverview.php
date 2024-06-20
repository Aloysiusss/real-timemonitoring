<?php

namespace App\Filament\Widgets;

use App\Models\Feedback;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $baha = Feedback::where('message', 'like', '%baha%')->orWhere('message', 'like', '%flood%')->count();
        $tulong = Feedback::where('message', 'like', '%tulong%')->orWhere('message', 'like', '%help%')->count();
        $emergency = Feedback::where('message', 'like', '%emergency%')->count();

        return [
            Card::make('Flood', $baha)
                ->description('counts')
                ->descriptionIcon('heroicon-s-user-group'),
            Card::make('Help', $tulong)
                ->description('counts')
                ->descriptionIcon('heroicon-s-user-group'),
            Card::make('Emergency', $emergency)
                ->description('counts')
                ->descriptionIcon('heroicon-s-user-group'),
        ];
    }
}
