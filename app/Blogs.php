<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    public function setURL($value)
    {
        $this->attributes['url'] = str_url($value);
    }
}
