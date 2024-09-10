<?php

namespace App\Filament\Resources\PlayListResource\Pages;

use App\Filament\Resources\PlayListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlayList extends EditRecord
{
    protected static string $resource = PlayListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
