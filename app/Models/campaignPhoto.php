<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campaignPhoto extends Model
{
    use HasFactory;
    protected $fillable = ['campaign_id', 'image_name'];

    public function campaign(){
        return $this->belongsTo(campaign::class);
    }
}
