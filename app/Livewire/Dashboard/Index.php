<?php

declare(strict_types=1);

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Dashboard')]
final class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
