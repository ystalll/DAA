<?php

namespace App\Filament\Admin\Resources\ParticipantsResource\Pages;

use App\Filament\Admin\Resources\ParticipantsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParticipants extends EditRecord
{
    protected static string $resource = ParticipantsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
