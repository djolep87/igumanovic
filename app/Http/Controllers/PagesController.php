<?php

namespace App\Http\Controllers;

use App\Models\Brajkovici;
use App\Models\Drenovci;
use App\Models\Galerija;
use App\Models\Letopis;
use App\Models\Musici;
use App\Models\Paramun;
use App\Models\Pedagog;
use App\Models\Psiholog;
use App\Models\Radanovci;
use App\Models\Razana;
use App\Models\SavetRoditelja;
use App\Models\SecaReka;
use App\Models\Skakavci;
use App\Models\Takmicenja;
use App\Models\Tubici;
use App\Models\UceniciGeneracija;
use App\Models\UpisPrvaka;
use App\Models\Vesti;
use App\Models\Zarici;
use App\Models\ZavrsniIspit;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function welcome()
    {
        $posts = Vesti::orderBy('created_at', 'desc')->take(5)->get();
        $images = Galerija::orderBy('created_at', 'desc')->take(3)->get();
        return view('/welcome', compact('images', 'posts'));
    }

    public function kontakt()
    {
        return view('pages.kontakt');
    }


    public function vesti()
    {
        $posts = Vesti::OrderBy('created_at', 'desc')->get();
        return view('pages.vesti', compact('posts'));
    }

    public function seca_reka()
    {
        $posts = SecaReka::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.seca_reka', compact('posts'));
    }

    public function razana()
    {
        $posts = Razana::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.razana', compact('posts'));
    }

    public function drenovci()
    {
        $posts = Drenovci::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.drenovci', compact('posts'));
    }

    public function zarici()
    {
        $posts = Zarici::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.zarici', compact('posts'));
    }

    public function musici()
    {
        $posts = Musici::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.musici', compact('posts'));
    }

    public function skakavci()
    {
        $posts = Skakavci::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.skakavci', compact('posts'));
    }

    public function tubici()
    {
        $posts = Tubici::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.tubici', compact('posts'));
    }

    public function brajkovici()
    {
        $posts = Brajkovici::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.brajkovici', compact('posts'));
    }

    public function paramun()
    {
        $posts = Paramun::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.paramun', compact('posts'));
    }

    public function radanovci()
    {
        $posts = Radanovci::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.radanovci', compact('posts'));
    }

    public function dokumenta()
    {
        return view('pages.dokumenta');
    }

    public function istorijat()
    {
        return view('pages.o_skoli.istorijat');
    }

    public function zaposleni()
    {
        return view('pages.o_skoli.zaposleni');
    }

    public function savet_roditelja()
    {
        return view('pages.o_skoli.savet_roditelja');
    }

    public function biblioteka()
    {
        return view('pages.o_skoli.biblioteka');
    }

    public function letopis()
    {
        $posts = Letopis::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.letopis', compact('posts'));
    }

    public function galerija()
    {
        $images = Galerija::orderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.galerija', compact('images'));
    }

    public function kalendar()
    {
        return view('pages.organizacija_rada.kalendar');
    }

    public function javne_nabavke()
    {
        return view('pages.dokumenta.javne_nabavke');
    }

    public function zanastavnike()
    {
        return view('pages.dokumenta.zanastavnike');
    }

    public function skolska_dokumenta()
    {
        return view('pages.dokumenta.skolska_dokumenta');
    }

    public function skolski_timovi()
    {
        return view('pages.dokumenta.skolski_timovi');
    }



    public function zvono()
    {
        return view('pages.organizacija_rada.zvono');
    }

    public function raspored()
    {
        return view('pages.organizacija_rada.raspored');
    }

    public function vannastavne_aktivnosti()
    {
        return view('pages.organizacija_rada.vannastavne_aktivnosti');
    }

    public function produzeni_boravak()
    {
        return view('pages.organizacija_rada.produzeni_boravak');
    }

    public function djacki_parlament()
    {
        return view('pages.za_djake.djacki_parlament');
    }

    public function jednosmenski()
    {
        return view('pages.organizacija_rada.jednosmenski');
    }

    public function rasporedimr()
    {
        return view('pages.organizacija_rada.rasporedimr');
    }

    public function rasporedisr()
    {
        return view('pages.organizacija_rada.rasporedisr');
    }

    public function zavrsni_ispit()
    {
        $posts = ZavrsniIspit::orderBy('created_at', 'desc')->get();
        return view('pages.za_djake.zavrsni_ispit', compact('posts'));
    }
    public function upis_u_srednje_skole()
    {
        return view('pages.za_djake.upis_u_srednje_skole');
    }
    public function upis()
    {
        return view('pages.za_roditelje.upis');
    }


    public function takmicenja()
    {
        $posts = Takmicenja::orderBy('created_at', 'desc')->get();
        return view('pages.za_djake.takmicenja', compact('posts'));
    }

    public function ucenici_generacije()
    {
        $posts = UceniciGeneracija::orderBy('created_at', 'desc')->get();
        return view('pages.za_djake.ucenici_generacije', compact('posts'));
    }

    public function otvorena_vrata()
    {
        return view('pages.za_roditelje.otvorena_vrata');
    }

    public function rasporedi()
    {
        return view('pages.za_roditelje.rasporedi');
    }
    public function rasporedikosj()
    {
        return view('pages.za_roditelje.rasporedikosj');
    }
    public function rasporedisc()
    {
        return view('pages.za_roditelje.rasporedisc');
    }

    public function spisak_udzbenika()
    {
        return view('pages.za_roditelje.spisak_udzbenika');
    }

    public function upis_prvaka()
    {
        $posts = UpisPrvaka::orderBy('created_at', 'desc')->get();
        return view('pages.za_roditelje.upis_prvaka', compact('posts'));
    }

    public function termini()
    {
        return view('pages.za_roditelje.termini');
    }

    public function psiholog_savetuje()
    {
        $posts = Psiholog::OrderBy('created_at', 'desc')->get();
        return view('pages.za_roditelje.psiholog_savetuje', compact('posts'));
    }

    public function pedagog_savetuje()
    {
        $posts = Pedagog::OrderBy('created_at', 'desc')->get();
        return view('pages.za_roditelje.pedagog_savetuje', compact('posts'));
    }
}
