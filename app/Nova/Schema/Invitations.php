<?php

namespace App\Nova\Schema;

use App\Nova\Actions\Community\AddSmartContractAction;
use App\Nova\Actions\Community\CreateAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Resource;
use Oryz\Core\Helpers\App;

class Invitations extends Resource
{
    public static $group = 'Invitations';

    public static $model = \App\Models\Invitation::class;

    public static $title = 'email';

    public static $search = [
        'fullname'
    ];

    public function fields(Request $request)
    {
        return [
            ID::make()->sortable()->readonly(),
            Text::make('fullname'),
            Text::make('hash')->readonly()->hideFromIndex(true),
            Text::make('link')->displayUsing(fn() => "<a href='" . URL::route('invitation.view', ['hash' => $this->hash]) . "' target='_blank'>" . URL::route('invitation.view', ['hash' => $this->hash]) . "</a>")
                ->asHtml()->readonly()->hideWhenCreating()->hideWhenUpdating()->hideFromIndex(true),


            Textarea::make('message')->default('')->showOnCreating(false),
            Boolean::make('accepted')->default(false)->sortable(true),
            Number::make('guests')->default(1)->sortable(true),
            Number::make('infants')->default(0)->hideFromIndex(true),
            Select::make('infants_age')
                ->options([
                    "0" => 'n/a',
                    "3" => 'mai mic de 3 ani',
                    "7" => '3-7 ani',
                    "18"=> 'mai mare de 7'
                ])
                ->default(0)->hideFromIndex(true),
            Boolean::make('vegan')->default(false)->hideFromIndex(true),
            Textarea::make('food_restriction')->showOnCreating(false),
            Boolean::make('after_party')->default(false)->sortable(true),

        ];
    }
}
