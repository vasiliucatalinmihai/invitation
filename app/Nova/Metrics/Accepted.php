<?php

namespace App\Nova\Metrics;

use App\Models\Invitation;
use Illuminate\Support\Collection;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class Accepted extends Partition
{
    public function name()
    {
        return 'Accepted';
    }

    public function calculate(NovaRequest $request)
    {
        /** @var Collection $accepted */
        $accepted = Invitation::where(['accepted' => true]);
        $rejected = Invitation::where(['accepted' => false]);
        return $this->result([
            'Accepted' => $accepted->count(),
            'Rejected' => $rejected->count(),
        ]);
    }

    public function uriKey()
    {
        return 'invitation-totals-accepted';
    }
}
