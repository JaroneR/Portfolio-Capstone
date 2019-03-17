<?php


namespace App\Http\Controllers;


use App\Alberta2016Sss;
use App\British_Columbia2016;
use App\Manitoba2016;
use App\New_Brunswick2016;
use App\Newfoundland_And_Labrador2016;
use App\NorthWest_Territories2016;
use App\Nova_Scotia2016;
use App\Nunavut2016;
use App\Ontario2016;
use App\Prince_Edward_Island2016;
use App\Quebec2016;
use App\Saskatchewan2016;
use App\Yukon2016;


class ControllerProvince extends Controller
{


    public function table()
    {

        $alberta2016s = Alberta2016Sss::all();
        $british_columbia2016s = British_Columbia2016::all();
        $manitoba2016s = Manitoba2016::all();
        $newfoundland_and_labrador2016s = Newfoundland_And_Labrador2016::all();
        $new_brunswick2016s = New_Brunswick2016::all();
        $northwest_territories2016s = NorthWest_Territories2016::all();
        $nova_scotia2016s = Nova_Scotia2016::all();
        $nunavut2016s = Nunavut2016::all();
        $ontario2016s = Ontario2016::all();
        $prince_edward_island2016s = Prince_Edward_Island2016::all();
        $Quebec2016s = Quebec2016::all();
        $saskatchewan2016s = Saskatchewan2016::all();
        $yukon2016s = Yukon2016::all();
        return View('table',
            ['alberta2016s' => $alberta2016s,
            'british_columbia2016s' => $british_columbia2016s,
            'manitoba2016s' => $manitoba2016s,
            'newfoundland_and_labrador2016s' => $newfoundland_and_labrador2016s,
            'new_brunswick2016s' => $new_brunswick2016s,
            'northwest_territories2016s' => $northwest_territories2016s,
            'nova_scotia2016s' => $nova_scotia2016s,
            'nunavut2016s' => $nunavut2016s,
            'ontario2016s' => $ontario2016s,
            'prince_edward_island2016s' => $prince_edward_island2016s,
            'Quebec2016s' => $Quebec2016s,
            'saskatchewan2016s' => $saskatchewan2016s,
            'yukon2016s' => $yukon2016s
            ]);


    }
}