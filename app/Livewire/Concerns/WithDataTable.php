<?php

declare(strict_types=1);

namespace App\Livewire\Concerns;

use Livewire\WithPagination;

trait WithDataTable
{
    use WithPagination;

    public string $search = '';

    public string $sortField = 'id';

    public string $sortDirection = 'desc';

    public int|string $perPage = 10;

    public array $selected = [];

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedPerPage(): void
    {
        $this->resetPage();
    }

    public function sortBy(string $field): void
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';

            return;
        }

        $this->sortField = $field;
        $this->sortDirection = 'asc';
    }

    public function getPerPageValue(): int
    {
        return $this->perPage === 'all' ? 999999 : (int) $this->perPage;
    }
}
