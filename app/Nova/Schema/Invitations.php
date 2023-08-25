<?php

namespace App\Nova\Schema;

use App\Nova\Actions\Community\AddSmartContractAction;
use App\Nova\Actions\Community\CreateAction;
use Illuminate\Http\Request;
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
        'email'
    ];

    public function fields(Request $request)
    {
        $domain = "http://vasilii-wday.home.ro";
        return [
            ID::make()->sortable()->readonly(),
            Text::make('email')->nullable(true),
            Text::make('fullname'),
            Text::make('hash')->readonly()->showOnIndex(false),
            Text::make('link')->displayUsing(fn() => "<a href='$domain/inv/$this->hash' target='_blank'>$domain/inv/$this->hash</a>")
                ->asHtml()->readonly()->hideWhenCreating()->hideWhenUpdating()->hideFromIndex(true),


            Textarea::make('message')->default('')->showOnCreating(false),
            Boolean::make('accepted')->default(false),
            Number::make('guests')->default(1),
            Number::make('infants')->default(0),
            Select::make('infants_age')
                ->options([
                    "0" => 'n/a',
                    "3" => 'mai mic de 3 ani',
                    "7" => '3-7 ani',
                    "18"=> 'mai mare de 7'
                ])
                ->default(0),
            Boolean::make('vegan')->default(false),
            Textarea::make('food_restriction')->showOnCreating(false),
            Boolean::make('after_party')->default(false),

        ];
    }
}
