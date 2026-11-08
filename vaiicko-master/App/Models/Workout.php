<?php

namespace App\Models;

use Framework\Core\Model;

class Workout extends Model
{
    protected static ?string $tableName = 'workouts';

    protected static ?array $fillable = [
        'name',
        'date',
        'duration',
        'type'
    ];

    public ?int $id = null;
    public ?string $name = null;
    public ?string $date = null;
    public ?int $duration = null;
    public ?string $type = null;
}
