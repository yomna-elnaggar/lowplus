<?php

use Carbon\Carbon;
use App\Models\Currency;
use App\Models\Language;
use Spatie\Permission\Models\Role;


if (!function_exists('getImage')) {
  function getImage($image, $folder = 'images')
  {
      return asset($folder .'/'. $image);
  }
}

function assignUserToRole($user, $role)
{
  $role_name = Role::firstOrCreate(['name' => $role]);
  $user->assignRole([]);
  $user->assignRole($role_name);
}

function dateTimezone($val, $format = null)
{
  if($format == 'date'){
    return Carbon::parse($val)->addHour(2)->format('F d');

  }elseif($format == 'date_time'){
    return Carbon::parse($val)->addHour(2)->format('F d, g:i A');

  }elseif($format == 'time'){
    return Carbon::parse($val)->addHour(2)->format('g:i A');

  }else{
    return Carbon::parse($val)->addHour(2)->format('F d, g:i A');
  }
}

?>