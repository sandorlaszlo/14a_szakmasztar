<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Competitor extends Model
{
    use HasFactory;

    public $timestamps = false;

    // protected $fillable = ['name', 'professionId', 'schoolName', 'birthDate', 'hostel', 'avatarurl'];
    protected $guarded = [];

    /**
     * Get the profession that owns the Competitor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profession(): BelongsTo
    {
        return $this->belongsTo(Profession::class, 'professionId', 'id');
    }
}
