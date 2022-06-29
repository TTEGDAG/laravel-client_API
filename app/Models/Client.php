<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Client extends Model
{
    use HasFactory;

    /**
     * url adres to api
     */
    protected const URL='http://127.0.0.1:8000/client';
    
    /**
     * fillable atributes
     *
     * @var array
     */
    protected $fillable = [
        'email', 'first_name', 'last_name', 'avatar'
    ];
    
    /**
     * get clients from api services and insert to DB
     *
     * @return void
     */
    public static function getClients(){

        $data=Http::get(self::URL)->json();
        $collection=collect($data);

        foreach($collection->get('data') as $name) {
            $client = new Client();
            $client->email = $name['email'];
            $client->first_name = $name['first_name'];
            $client->last_name = $name['last_name'];
            $client->avatar = $name['avatar'];
            $client->save();
        }
    }
}