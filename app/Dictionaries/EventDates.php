<?php

namespace App\Dictionaries;

use Statamic\Dictionaries\BasicDictionary;
use Statamic\Facades\GlobalSet;

class EventDates extends BasicDictionary
{

    protected function getItems(): array
    {
        $globalSet = GlobalSet::findByHandle('expo_settings');
        $eventDates = $globalSet->inCurrentSite()->get('event_dates');

        return collect($eventDates)->map(function ($eventDate) {
            return [
                'label' => $eventDate['expo_date'],
                'value' => $eventDate['expo_date']
            ];
        })->all();

    }
}
