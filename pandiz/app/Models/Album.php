<?php
namespace App\Models;

use Nova\Database\ORM\Model as BaseModel;


class Album extends BaseModel {
    protected $table = "album";
    public $timestamps = false;
    protected $fillable = array("*");


    public function utilisateur() {
        return $this->belongsTo("App\Models\User", "utilisateur_id");
    }

    public function chansons() {
        return $this->belongsToMany("App\Models\Chanson", "contient", "playlist_id", "chanson_id", "album_id");
    }

}

?>