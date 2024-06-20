<?php

namespace App\Models;

use Livewire\WithFileUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use WithFileUploads;
    use HasFactory;

    protected $fillable = [
        'name',
        'message',
        'image_path'
    ];

}
