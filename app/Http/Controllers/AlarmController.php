<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Alarm;
use Illuminate\Http\Request;

class AlarmController extends Controller
{
    public function getAlarm()
    {
        try {
            $alarm = Alarm::first();

            $errors = [];

            if (!$alarm) {
                $errors['alarm'] = 'Alarm not found';
            }
            // Check if any errors exist
            if (empty($errors)) {
                return response()->json([
                    'status' => 200,
                    'color' => $alarm->color,
                    'time' => $alarm->time,

                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'Failed to read Alarm.',
                    'errors' => $errors,
                ], 500);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred while reading the Alarm.',
                'error' => $e->getMessage(),
            ], 500);
        }

    }

    public function updateAlarm($color, $time)
    {
        try {
            $updateData = ['color' => $color, 'time' => $time];
            $isUpdated = Alarm::first()->update($updateData);

            if ($isUpdated) {
                response()->json([
                    'status' => 200,
                    'color' => $color,
                ], 200);
                return back();
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'No record found for the alarm id.',
                ], 404);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred while updating the alarm.',
                'error' => $e->getMessage(),
            ], 500);
        }

    }

    public function reduceAlarmTime()
    {
        try {
            $alarm = Alarm::first();
            if ($alarm) {
                
                if ($alarm->time > 0) {
                    $alarm->time -= 1;
                    $alarm->save();

                    return response()->json([
                        'status' => 200,
                        'time' => $alarm->time,
                    ], 200);
                }

            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'No record found for the alarm id.',
                ], 404);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred while updating the alarm.',
                'error' => $e->getMessage(),
            ], 500);
        }

    }
}
