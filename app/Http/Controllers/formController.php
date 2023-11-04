<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Exports\UsersExport2;
use App\Exports\UsersExport3;
use App\Exports\UsersExport4;
use App\Models\armoir;
use App\Models\armoirs;
use App\Models\exceldatas;
use App\Models\point;
use App\Models\points;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class formController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        return view('main.home');
    }

    public function points()
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        return view('main.points.fome');
    }
    public function dataPoints()
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        return view("main.points.dataForm");
    }
    public function location()
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        return view('main.locationForm');
    }

    public function dataArmoir()
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        return view('main.armoir.dataForm');
    }

    public function dataPoint()
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        return view("main.points.dataForm");
    }
    public function sendarrondissementArmoir(Request $request)
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        $data = $request->only(['arrondissement', 'numero']);
        Session::put('firstPageData', $data);
        $numeroExists = armoirs::where('numero', $data['numero'])->exists();
        if ($numeroExists) {
            session(['numeroExists' => true]);
            return view("main.armoir.fome");
        }
        session(['numeroExists' => false]);
        return view("main.armoir.locationForm");
    }
    public function sendarrondissementPoint(Request $request)
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        $data = $request->only(['arrondissement']);
        Session::put('firstPageData', $data);
        $armoirs=armoirs::select("numero")
        ->distinct("numero")
        ->get();
        return view("main.points.locationForm",compact("armoirs"));
    }
    public function borough()
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        $data = Session::get('firstPageData');
        return view('main.armoir.fome', compact('data'));
    }

    public function formView()
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        $user = Auth::user();
        $exelDatas = exceldatas::where('user_id', $user->id)->get();
        return view('main.form', compact('exelDatas'));
    }
    public function saveLocationArmoir(Request $req)
    {
        $data = $req->session()->get('firstPageData');
        Session::put('firstPageData', $data);

        $base64Image = $req->photo;
        if ($base64Image!= null) {
            $photo =  $base64Image;
            $fileName = time() . '_' . $photo->getClientOriginalName();
            $directory = 'image'; // You can change this directory name if needed.
            $photo->storeAs($directory, $fileName, 'public');
                $imagePath = 'storage/' . $directory.'/'.$fileName;
                Session::put('imagePath', $imagePath);
            }
            // You can save the image path to your database here if needed.
        return response()->json(['message' => 'armoir']);
    }
    public function saveLocationPoints(Request $req)
    {
        $data = $req->session()->get('firstPageData');
        $data += $req->only(['secteur','numero']);
        Session::put('firstPageData', $data);
        $base64Image = $req->photo;
        if ($base64Image!= null) {
            $photo =  $base64Image;
            $fileName = time() . '_' . $photo->getClientOriginalName();
            $directory = 'image'; // You can change this directory name if needed.
            $photo->storeAs($directory, $fileName, 'public');
                $imagePath = 'storage/' . $directory.'/'.$fileName;
                Session::put('imagePath', $imagePath);
            }
        return response()->json(['message' => 'points']);
    }
    public function saveArmoir(Request $req)
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        Session::get('imagePath');
        $test = Session::get('firstPageData');
        $imagePath = Session::get('imagePath');
        $user = Auth::user();
        $armoir = new armoirs();
        $armoir->latitude = $req->lat;
        $armoir->longitude = $req->lon;
        if($imagePath)
        {
            $url = url('/');
            $parsedUrl = parse_url($url);
            $serverHostPath = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];
            if (isset($parsedUrl['port'])) {
                $serverHostPath .= ':' . $parsedUrl['port'];
            }
            $armoir->image = $serverHostPath . '/' . $imagePath;
        }
        $armoir->conformite = $req->conformite;
        $armoir->observation = $req->observation;
        $armoir->arrondissement = $test['arrondissement'];
        $armoir->type = $req->typear;
        $armoir->source = $req->source;
        $armoir->numero = $test['numero'];
        $armoir->numeroCompteur = $req->numeroCompteur;
        $armoir->calibre = $req->Calibre;
        $armoir->tension = $req->Tension;
        $armoir->typeCommande = $req->typeCommande;
        $armoir->nombreDepart = $req->nombreDepart;
        $armoir->puissance = $req->puissance;
        $armoir->secteur = $test['secteur'];
        $armoir->user_id = $user->id;
        $armoir->save();
        return redirect()->route('data');
    }
    public function savePoint(Request $req)
    {
        $user = Auth::user();
        if ($user == null) {
            return view('auth.login');
        }
        Session::get('imagePath');
        $test = Session::get('firstPageData');
        $imagePath = Session::get('imagePath');
        $user = Auth::user();
        $point = new points();
        $point->latitude = $req->lat;
        $point->longitude = $req->lon;
        if($imagePath){
            $url = url('/');
            $parsedUrl = parse_url($url);
            $serverHostPath = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];
            if (isset($parsedUrl['port'])) {
                $serverHostPath .= ':' . $parsedUrl['port'];
            }
            $point->image = $serverHostPath . '/' . $imagePath;
        }
        $point->arrondissement = $test['arrondissement'];
        $point->secteur = $test['secteur'];
        $point->code = $req->codepoint;
        $point->categorie = $req->categorie;
        $point->typeReseux = $req->typeReseau;
        $point->etatReseau = $req->etatReseau;
        $point->etatCable = $req->etatCable;
        $point->nf = $req->nf;
        $point->numero = $test['numero'];
        $point->typeSupport = $req->typeSupport;
        $point->nombreConsole = $req->nombreConsole;
        $point->etatSupport = $req->etatSupport;
        $point->dispositionSupport = $req->dispositionSupport;
        $point->hauteurSupport = $req->hauteurSupport;
        $point->etatLuminaire = $req->etatLuminaire;
        $point->puissanceA = $req->puissanceA;
        $point->puissanceB = $req->puissanceB;
        $point->puissanceC = $req->puissanceC;
        $point->puissanceD = $req->puissanceD;
        $point->ageSupport = $req->ageSupport;
        $point->support = $req->ageSupport;
        $point->ageReseau = $req->ageReseau;
        $point->reseau = $req->reseau;
        $point->user_id = $user->id;
        $point->save();
        return redirect()->route('pointData');
    }
    public function exportFilesArmoir()
    {
        $user = Auth::user();
        return Excel::download(new UsersExport($user->id),  $user->userName.'.xlsx');
    }
    public function exportFilesPoint()
    {
        $user = Auth::user();
        return Excel::download(new UsersExport2($user->id), $user->userName.'.xlsx');
    }
    public function exportAdminFilesArmoir()
    {
        $user = Auth::user();
        return Excel::download(new UsersExport4(),  $user->userName.'.xlsx');
    }
    public function exportAdminFilesPoint()
    {
        $user = Auth::user();
        return Excel::download(new UsersExport3(), $user->userName.'.xlsx');
    }
}
