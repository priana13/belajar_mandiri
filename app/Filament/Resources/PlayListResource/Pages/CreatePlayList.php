<?php

namespace App\Filament\Resources\PlayListResource\Pages;

use App\Filament\Resources\PlayListResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePlayList extends CreateRecord
{
    protected static string $resource = PlayListResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {    

        $data['user_id'] = auth()->id();
    
        return $data;
    }

    protected function beforeCreate(): void
    {
        // Runs before the form fields are saved to the database.

      

     
    }
}
