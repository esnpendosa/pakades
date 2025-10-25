<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
    'name',
    'email',
    'password',
    'role',
    'nama_desa',
    'nama_kecamatan',
    'profile_photo_path',
    'bio'
];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    public function getProfilePhotoUrlAttribute()
{
    return $this->profile_photo_path 
        ? asset('storage/' . $this->profile_photo_path)
        : 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&color=7C3AED&background=EBF4FF';
}

protected static function boot()
{
    parent::boot();

    static::deleting(function ($user) {
        if ($user->profile_photo_path) {
            Storage::delete('public/' . $user->profile_photo_path);
        }
    });
}
    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class);
    }
    
    public function review()
    {
        return $this->hasMany(ReviewDokumen::class, 'reviewer_id');
    }
}