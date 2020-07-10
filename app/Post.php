<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    //Evadir la proteccion contra asignacion masiva
    protected $guarded = [];

    //TODO se puede cambiar esto por la propiedad fillable en la que definimos que columnas de la base de datos
    //son las que se pueden sobreescribir y luego en el controlador usar fill en vez de create.

    //protected $fillable = ['title','excerpt','body', 'published_at','category'];


    protected $dates = ['published_at'];

    //Sobrescribir metodo de eloquent para encontrar post por el campo title
    public function getRouteKeyName()
    {
        //Se retorna el campo por el cual se desea buscar por defecto
        return 'url';
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopePublished($query)
    {

        $query->whereNotNull('published_at')
            ->where('published_at','<=', Carbon::now() )
            ->latest('published_at');

    }
}
