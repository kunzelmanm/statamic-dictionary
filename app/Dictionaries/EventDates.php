<?php

namespace App\Dictionaries;

use Statamic\Dictionaries\BasicDictionary;
use Statamic\Facades\GlobalSet;

class EventDates extends BasicDictionary
{
    protected string $valueKey = 'expo_date';
    protected string $labelKey = 'expo_date';

    protected function getItems(): array
    {
        $globalSet = GlobalSet::findByHandle('expo_settings');
        $eventDates = $globalSet->inCurrentSite()->get('event_dates');

        return $eventDates;
    }
}
