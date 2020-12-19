<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
class Media extends Model
{use LogsActivity;
   protected $guarded=[];

   
   protected static $logAttributes = ['order_column', 'file_name'];
   protected static $recordEvents = ['deleted','created','updated'];
   protected static $logName = 'Media';
   public function getDescriptionForEvent(string $eventName): string
   {
       return "This Media has been {$eventName}";
   }
}
