<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class officeModel extends Model
{
    protected $table = 'user';

    protected $fillable = ['username','email'];
}

?>