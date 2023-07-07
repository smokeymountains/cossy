<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $table = '_project';
    protected $fillable = [
        'Title',
        'Descr',
        'meta',
        'status',
        'popular',
        'start',
        'End'

    ];
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
        ->width(696)
            ->height(456);
        $this->addMediaConversion('bigthumb')
        ->width(932)
            ->height(532);
    }
}
