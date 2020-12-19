<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
class socialMediaNews extends Model
{use LogsActivity;
   protected $guarded=[];

  
   protected static $logAttributes = ['post_link','name'];
   protected static $recordEvents = ['deleted','created','updated'];
   protected static $logName = 'socialMediaNews';
   public function getDescriptionForEvent(string $eventName): string
   {
       return "This socialMediaNews has been {$eventName}";
   }
}
