<?php

namespace App\Http\Controllers;

abstract class Controller
{
    /**
     * Path to public
     */
    const MainPath = "/";

    /**
     * Path to public
     */
    const StoragePath = "axIshIrkABLE";

    /**
     * Path to gamefiles
     */
    const ArchivePath = self::StoragePath;

    /**
     * Loads a swf from the gamefiles
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function getLoadPath(String $path): String
    {
        return self::ArchivePath . "/" . $path;
    }
}
