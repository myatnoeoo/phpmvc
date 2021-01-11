<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class homeModel extends Model{

    protected $table = "users";

    protected $fillable = [
        'name', 'email', 'password','userimage'
    ];

    // public static function query()
    // {
    //     $data = array(
    //         'name' => 'DAT',
    //         'email' => 'test@gmail.com',
    //         'password' => 'company'
    //     );


        // $list = homeModel::get();
        // var_dump($list);

        // $find = homeModel::find(1);
    

        // homeModel::create($data);


        // return (object) $data;
    // }
}
?>