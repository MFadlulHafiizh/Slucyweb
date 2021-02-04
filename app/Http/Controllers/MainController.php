<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(){
        $dateNow = Carbon::now();
        $reformatDate = $dateNow->format('j F Y h:i:s A');

        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json')
                                ->withDatabaseUri('https://slucyweb-default-rtdb.firebaseio.com/');

        $database = $factory->createDatabase();

        $reference = $database->getReference('Products');

        $snapshot = $reference->getSnapshot();

        $value = $snapshot->getValue();
        return view('dashboard', compact('reformatDate', 'value'));

    }
    public function registid(){
        return view('registid');
    }

    public function signid(){
        return view('signid');
    }

    public function create(Request $request){
        $i = 1;

        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json')
                                ->withDatabaseUri('https://slucyweb-default-rtdb.firebaseio.com/');

        $database = $factory->createDatabase();

        $ref = $database->getReference('Products');

        $key = $ref->push()->getKey();

        $status = $ref->getChild($key)->set([
            'SlucyId' => $request->registid,
            'product' => $request->product,
            'dateRange' => $request->datetimes,
            'power' => $request->status,
            'status' => 'in'
        ]);

        return redirect('dashboard')->with('status', 'Data');

    }
}
