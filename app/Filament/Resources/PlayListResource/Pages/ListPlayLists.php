<?php

namespace App\Filament\Resources\PlayListResource\Pages;

use App\Filament\Resources\PlayListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlayLists extends ListRecords
{
    protected static string $resource = PlayListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
