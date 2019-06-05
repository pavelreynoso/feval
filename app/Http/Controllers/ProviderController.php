<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleCategory;
use App\EventCategory;
use App\MusicCategory;
use App\MusicService;
use App\CateringCategory;
use App\CateringService;
use App\CateringOfferType;



class ProviderController extends Controller
{

    public function index()
    {
        return view('pages.users.providers.home');
    }

    public function register100()
    {
        $articles = ArticleCategory::all();
        $events = EventCategory::all();
        return view('pages.users.providers.100', compact('articles', 'events'));
    }

    public function register200()
    {
        $musiccategories = MusicCategory::all();
        $services = MusicService::all();
        return view('pages.users.providers.200', compact('musiccategories', 'services'));
    }

    public function register201()
    {
        return view('pages.users.providers.201');
    }

    public function register202()
    {
        return view('pages.users.providers.202');
    }

    public function register203()
    {
        return view('pages.users.providers.203');
    }

    public function register204()
    {
        return view('pages.users.providers.204');
    }

    public function register205()
    {
        return view('pages.users.providers.205');
    }

    public function register206()
    {
        return view('pages.users.providers.206');
    }

    public function register208()
    {
        return view('pages.users.providers.208');
    }

    public function register209()
    {
        return view('pages.users.providers.209');
    }

    public function register210()
    {
        return view('pages.users.providers.210');
    }

    public function register211()
    {
        return view('pages.users.providers.211');
    }

    public function register212()
    {
        return view('pages.users.providers.212');
    }
    public function register213()
    {
        return view('pages.users.providers.213');
    }
    public function register214()
    {
        $cateringcategories = CateringCategory::all();
        $cateringservices = CateringService::all();
        $cateringoffertypes = CateringOfferType::all();

        return view('pages.users.providers.214', compact('cateringcategories', 'cateringservices', 'cateringoffertypes'));
    }


    public function register301()
    {
        return view('pages.users.providers.301');
    }

    public function register302()
    {
        return view('pages.users.providers.302');
    }


}
