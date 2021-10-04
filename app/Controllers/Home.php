<?php

namespace App\Controllers;


use App\Models\Skoly;
use App\Models\Prijati;




class Home extends BaseController
{

	
	public function index()
	{
		$skoly = new Skoly();
		$data['skoly'] = $skoly -> select('skola.id, skola.nazev as skola, mesto.nazev, geo-lat, geo-long')-> orderBy('skola.id')->join('mesto', 'skola.mesto = mesto.id')->findAll();
		$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
		if(!$this->ionAuth->loggedIn())echo view('head');
		else echo view('headprihlaseny');
		echo view('uvod', $data);
	}

	public function prijati()
	{
		$pocet_prijatych = new Prijati();
		$data['pocet_prijatych'] = $pocet_prijatych -> select('pocet_prijatych.id, obor.nazev as obor, skola.nazev as skola, pocet, rok')-> orderBy('pocet_prijatych.id')->join('obor', 'pocet_prijatych.obor = obor.id')->join('skola', 'pocet_prijatych.skola = skola.id')->findAll();
		$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
		if(!$this->ionAuth->loggedIn())echo view('head');
		else echo view('headprihlaseny');
		echo view('prijati', $data);
	}

    public function mapa(){
		$skoly = new Skoly();
		$data['skoly'] = $skoly -> select('skola.id, skola.nazev as skola, mesto.nazev, geo-lat, geo-long')-> orderBy('skola.id')->join('mesto', 'skola.mesto = mesto.id')->findAll();
		$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
		if(!$this->ionAuth->loggedIn())echo view('head');
		else echo view('headprihlaseny');
		echo view('mapa', $data);
	}	

		}

?>