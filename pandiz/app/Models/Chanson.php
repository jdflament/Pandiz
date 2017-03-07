<?php
namespace App\Models;

use Nova\Database\ORM\Model as BaseModel;


class Chanson extends BaseModel {
    protected $table = "chanson";
    public $timestamps = false;
    protected $fillable = array("*");

    public function utilisateur() {
        return $this->belongsTo("App\Models\User", "utilisateur_id");
    }


}

?>