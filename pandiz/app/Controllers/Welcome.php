<?php
/**
 * Welcome controller
 *
 * @author David Carr - dave@novaframework.com
 * @version 3.0
 */

namespace App\Controllers;

use App\Core\Controller;

use App\Models\Chanson;
use App\Models\User;
use Nova\Support\Facades\Auth;
use Nova\Support\Facades\Input;
use Nova\Support\Facades\Redirect;
use View;


/**
 * Sample controller showing 2 methods and their typical usage.
 */
class Welcome extends Controller
{

    /**
     * Create and return a View instance.
     */
    public function index()
    {
        $message = __('Hello, welcome from the welcome controller! <br/>
this content can be changed in <code>/app/Views/Welcome/Welcome.php</code>');
        
        if (!isset($_POST['style']) || $_POST['style']=="tous") {
            $all = Chanson::all();
        } else {
            
        $all = Chanson::where('style', '=', $_POST['style'])->take(10)->get();
        
        /*$c = new Chanson();
        $c->nom = "Reminder";
        $c->duree = "00:03:12";
        $c->fichier = "blabla";
        $c->post_date = "2017-07-03";
        $c->style = "Pop";
        $c->utilisateur_id = 1;
        $c->save();*/
        }
        
        return View::make('Welcome/Welcome')
            ->shares('title', __('Welcome'))
            ->with('welcomeMessage', $message)
            ->with('all', $all)
            ->with('style',Input::get('style'));
        
        
    }
    
    public function formupload()
    {

        return View::make('Welcome/formupload')
            ->shares('title', 'nouvelle');
    }
    
    public function creechanson() {
        
        if(Input::has('nom') && 
           Input::has('style') && 
           Input::hasFile('chanson') && 
           Input::file('chanson')->isValid() && 
           Input::hasFile('pochette') && 
           Input::file('pochette')->isValid()){
            
            $file = Input::file('chanson')->getClientOriginalName();
            $f = Input::file('chanson')->move('assets/music/'.Auth::user()->username,$file);
            $file2 = Input::file('pochette')->getClientOriginalName();
            $f2 = Input::file('pochette')->move('assets/images/'.Auth::user()->username,$file2);
            
            $c = new Chanson();
            $c->nom = Input::get('nom');
            $c->style = Input::get('style');
            $c->fichier = "/".$f;
            $c->fichier2 = "/".$f2;
            $c->utilisateur_id = Auth::id();
            $c->duree = "";
            $c->post_date = date('Y-m-d h:i:s');
            $c->save();
            return Redirect::to('/');
        }
        
        echo "<pre>";
        echo "<br />";
        
        print_r($_POST);
        
        echo "<br />";
        print_r($_FILES);
        
        echo "</pre>";
        die(1);
    }

    /**
     * Create and return a View instance.
     */
    public function subPage()
    {
        $message = __('Hello, welcome from the welcome controller and subpage method! <br/>
This content can be changed in <code>/app/Views/Welcome/SubPage.php</code>');

        return $this->getView()
            ->shares('title', __('Subpage'))
            ->withWelcomeMessage($message);
    }
    
    public function about()
    {
        return View::make('Welcome/About')
            ->shares('title', 'About')
            ->with('nom','Clément');
        
    }
    
    public function param($id)
    {
        
        $c = Chanson::find($id);
        if($c==false)
            return View::make('Error/404')
                ->shares('title', 'non trouve');
        return View::make('Welcome/param')
            ->shares('title', 'param')
            ->with('chanson', $c);
        
    }
    
     public function profil($id)
    {
         $u = User::find($id);
        if($u==false)
            return View::make('Error/404')
                ->shares('title', 'non trouve');
        return View::make('Welcome/profil')
            ->shares('title', 'profil');
/*            ->with('chanson', $c);*/
        
    }

}
