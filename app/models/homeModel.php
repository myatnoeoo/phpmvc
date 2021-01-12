<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class homeModel extends Model{

    protected $table = "users";

    protected $fillable = [
        'name', 'email', 'password','userimage'
    ];

}
?>