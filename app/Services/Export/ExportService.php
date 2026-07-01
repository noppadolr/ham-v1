<?php

declare(strict_types=1);

namespace App\Services\Export;

use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

final class ExportService
{
    public function excel(object $export, string $fileName): BinaryFileResponse
    {
        return Excel::download($export, $fileName);
    }

    public function pdf(string $view, array $data, string $fileName)
    {
        return Pdf::loadView($view, $data)
            ->setPaper('a4', 'landscape')
            ->download($fileName);
    }
}
