<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _poll_questions extends Model
{
    use HasFactory;
    protected $table="polling_app";
    protected $primaryKey="id";
}
