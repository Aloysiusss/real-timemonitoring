<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;


class FeedbackChart extends ChartWidget
{
    protected static ?string $heading = 'Feedback Chart';


    protected function getData(): array
    {
        // Fetch feedback counts based on conditions
        $feedbackData = DB::table('feedback')
            ->select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('SUM(CASE WHEN message LIKE "%baha%" OR message LIKE "%flood%" THEN 1 ELSE 0 END) as baha_count'),
                DB::raw('SUM(CASE WHEN message LIKE "%tulong%" OR message LIKE "%help%" THEN 1 ELSE 0 END) as tulong_count'),
                DB::raw('SUM(CASE WHEN message LIKE "%emergency%" THEN 1 ELSE 0 END) as emergency_count')
            )
            ->groupBy(DB::raw('DATE(created_at)'))
            ->orderBy('date')
            ->get();

        // Extract the labels and datasets
        $labels = $feedbackData->pluck('date');
        $bahaValues = $feedbackData->pluck('baha_count');
        $tulongValues = $feedbackData->pluck('tulong_count');
        $emergencyValues = $feedbackData->pluck('emergency_count');

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Flood',
                    'data' => $bahaValues,
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'fill' => false,
                ],
                [
                    'label' => 'Help',
                    'data' => $tulongValues,
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'fill' => false,
                ],
                [
                    'label' => 'Emergency',
                    'data' => $emergencyValues,
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'fill' => false,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
