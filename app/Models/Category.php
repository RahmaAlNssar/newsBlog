<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
class Category extends Model
{ use LogsActivity;

    protected $fillable=['catName','catType','parent_id'];
    protected static $ignoreChangedAttributes = ['parent_id'];
    protected static $logAttributes = ['catName', 'catType'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logName = 'Category';
    public function getDescriptionForEvent(string $eventName): string
    {
        return "This Category has been {$eventName}";
    }

    public function category(){
        return $this->belongsTo('App\Models\Category','parent_id');
    }
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
