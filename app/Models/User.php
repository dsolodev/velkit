<?php

declare(strict_types = 1);

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\CarbonInterface;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property-read int                  $id
 * @property-read string               $name
 * @property-read string               $email
 * @property-read CarbonInterface|null $email_verified_at
 * @property-read string               $password
 * @property-read string|null          $remember_token
 * @property-read bool                 $is_active
 * @property-read CarbonInterface      $created_at
 * @property-read CarbonInterface      $updated_at
 */
#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
final class User extends Authenticatable implements FilamentUser
{
    use Notifiable;

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_active;
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
            'is_active'         => 'boolean',
        ];
    }
}
