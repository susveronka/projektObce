<?php

namespace App\Controllers;
use App\Controllers\view;
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
       $this->data["ZK"] = $this->kraj->findAll();
    }

    public function index()
    {
        //
    }

    public function ZK()
    {
        $okresCely = $this->okres->select('okres.nazev, okres.kod')->join('kraj','kraj.kod = okres.kraj','inner')->where('kraj.nazev', 'Zlínský kraj')->findAll();
        $this->data["okresCely"] = $okresCely;
        echo view('ZK', $this->data);
    }

    public function popisOkresu($okres) {
        $okresCely = $this->okres->select('okres.nazev, okres.kod')->join('kraj','kraj.kod = okres.kraj','inner')->where('kraj.nazev', 'Zlínský kraj')->findAll();
        $this->data["okresCely"] = $okresCely;
        $this->data['opopisOkresu'] = $this->okres->find($okres);
        echo view('popisOkresu', $this->data);
    }
}
