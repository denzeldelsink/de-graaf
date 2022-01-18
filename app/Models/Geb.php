<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geb extends Model
{
    use HasFactory;

 protected $fillable= [
     'Voornaam','Achternaam','Email','Wachtwoord'
 ]
}