<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        return view('admin.settings', [
            config(['app.title' => "Game"]),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function items()
    {
        return view('admin.items', [
            config(['app.title' => "Game"]),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function maps()
    {
        return view('admin.maps', [
            config(['app.title' => "Game"]),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function process(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => ['required'],
        ]);

        switch ($request->type) {
            case "HairM":
                $location = "hair/M/";
                break;
            case "HairF":
                $location = "hair/F/";
                break;
            case "Axe":
                $location = "items/axes/";
                break;
            case "Bow":
                $location = "items/bows/";
                break;
            case "Cape":
                $location = "items/capes/";
                break;
            case "Ground":
                $location = "items/grounds/";
                break;
            case "Gauntlet":
                $location = "items/gauntlets/";
                break;
            case "Dagger":
                $location = "items/daggers/";
                break;
            case "Gun":
                $location = "items/guns/";
                break;
            case "Helm":
                $location = "items/helms/";
                break;
            case "House":
                $location = "items/house/";
                break;
            case "Mace":
                $location = "items/maces/";
                break;
            case "Pet":
                $location = "items/pets/";
                break;
            case "Polearm":
                $location = "items/polearms/";
                break;
            case "Staff":
                $location = "items/staves/";
                break;
            case "Sword":
                $location = "items/swords/";
                break;
            case "ArmorF":
                $location = "classes/F/";
                break;
            case "ArmorM":
                $location = "classes/M/";
                break;
            case "Map":
                $location = "maps/";
                break;
            case "Music":
                $location = "musics/";
                break;
            case "Cutscene":
                $location = "cutscene/";
                break;
            case "Monster":
                $location = "mon/";
                break;
            case "gMenu":
                $location = "gameMenu/";
                break;
            case "sFile":
                $location = "clients/";
                break;
            case "sBook":
                $location = "book/";
                break;
            case "sAssets":
                $location = "interface/Assets/";
                break;
            case "sLobby":
                $location = "lobby/";
                break;
            case "Loader":
                $location = "";
                break;
            case "sBG":
                $location = "title/";
                break;
            case "sAchievements":
                $location = "achievements/";
                break;
            case "gMenu":
                $location = "gameMenu/";
                break;
            default:
                $location = '';
        }

        $file = $request->file('file')->getClientOriginalName();
        $path = Controller::getLoadPath($location);

        $request->file->move(public_path("gamefiles/" . Controller::getLoadPath("/" . $location)), $file);

        return response()->json([
            'success' => "YES",
        ]);
    }
}
