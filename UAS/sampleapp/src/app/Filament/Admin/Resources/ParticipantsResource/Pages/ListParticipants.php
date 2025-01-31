<?php

namespace App\Filament\Admin\Resources\ParticipantsResource\Pages;

use App\Filament\Admin\Resources\ParticipantsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParticipants extends ListRecords
{
    protected static string $resource = ParticipantsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
