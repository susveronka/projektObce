<?php

namespace App\Controllers;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\AdresniMisto;
use App\Models\CastObce;
use App\Models\Obec;
use App\Models\Okres;
use App\Models\SO;
use App\Models\Ulice;
use App\Models\Kraj;

class Main extends BaseController
{
var $kraj;
var $adresniMisto;
var $obec;
var $castObce;
var $okres;
var $so;
var $ulice;

    public function __construct()
    {
       $this->kraj = new Kraj();
       $this->adresniMisto = new AdresniMisto();
       $this->obec = new Obec();
       $this->castObce = new CastObce();
       $this->okres = new Okres();
       $this->so = new SO();
       $this->ulice = new Ulice();
        
    }

    public function index()
    {
        return view('index');
    }
}
