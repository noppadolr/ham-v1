<?php

declare(strict_types=1);

namespace App\Services\Notification;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Collection;

final class NotificationService
{
    public function send(Collection $users, Notification $notification): void
    {
        $users->each(fn ($user) => $user->notify($notification));
    }
}
