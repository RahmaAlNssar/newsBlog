<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Activitylog\Traits\LogsActivity;
class Post extends Model implements HasMedia
{
    use HasMediaTrait;
    use LogsActivity;
    protected $guarded=[];
    protected static $ignoreChangedAttributes = ['cat_id'];
    protected static $logAttributes = ['title', 'content','image'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logName = 'Post';
    public function getDescriptionForEvent(string $eventName): string
    {
        return "This Post has been {$eventName}";
    }
    public function category(){
        return $this->belongsTo('App\Models\Category','cat_id');
    }

    public function MediaUrl(){
        return $this->belongsTo('App\Models\Media','image_url');
    }
}
