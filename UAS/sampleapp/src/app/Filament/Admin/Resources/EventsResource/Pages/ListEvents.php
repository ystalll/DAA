<?php

namespace App\Filament\Admin\Resources\EventsResource\Pages;

use App\Filament\Admin\Resources\EventsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEvents extends ListRecords
{
    protected static string $resource = EventsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
