<?php
namespace App\Models;
use App\Models\Country;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Email extends Authenticatable
{
  protected $fillable = [
        'image',
        'message',
        'subject',
        'recipient'
    ];

    use HasFactory;
}
