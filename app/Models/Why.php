<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Why extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = 'why';
    protected $fillable = [
        'descr',
    ];
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
        ->width(697)
            ->height(500);
        $this->addMediaConversion('bigthumb')
        ->width(932)
            ->height(532);
    }
}
