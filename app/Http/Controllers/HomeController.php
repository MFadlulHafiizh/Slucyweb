<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Product;
use App\User;
use App\RepeatDays;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dateNow = Carbon::now();
        $value = Product::where('id_user', 'like', Auth::user()->id)
        ->where('action', 'like', 'In')
        ->paginate(20);

        $switch = Product::where('product_name', 'like', 'Switch')->where('id_user', 'like', Auth::user()->id)
        ->count();

        $plug = Product::where('product_name', 'like', 'Plug')->where('id_user', 'like', Auth::user()->id)
        ->count();
        $day = \DB::table('repeat_days')
                ->select('repeat_days.days')
                ->join('product','repeat_days.id_product','=','product.id')
                ->join('users','product.id_user','=','users.id')
                ->where('product.id_user',Auth::user()->id)
                ->get();

        $reformatDate = $dateNow->format('j F Y h:i:s A');
        return view('home', compact('value', 'switch', 'plug','day'));
    }
    public function registid(){
        return view('registid');
    }
    public function signid(){
        return view('signid');
    }

    public function profile(Request $request){
        return view('profile', [
            'user' => $request->user()
            ]);
        }


        public function editProfile(Request $request){

            if ($request->has('foto')){
                $foto    = $request->foto;
                $newFoto= time().$foto->getClientOriginalName();

                $foto = $request->file('foto');
                $tujuan_upload = 'uploads';
                $foto->move($tujuan_upload,$newFoto);

                $data_user = [
                    'name'   => $request->name,
                    'email'   => $request->email,
                    'foto'    => 'uploads/'.$newFoto
                ];
            }
            else{

                $data_user = [
                    'name'   => $request->name,
                    'email'   => $request->email
                ];

            }

            $status = $request->user()->update($data_user);


            if ($status) {
                return redirect()->back()->with('edit', 'Data berhasil diubah');
            }else{
                return redirect()->back()->with('error', 'Data gagal diubah');
            }
        }

        public function editPassword(Request $request){
            return view('editPassword', [
                'user' => $request->user()
                ]);
            }

            public function updatePassword(Request $request){
                $request->user()->update([
                    'password' => Hash::make($request->get('new_password'))
                    ]);

                    return redirect('editPassword')->with('success', 'sasas');
                }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
      public function store(Request $request)
      {
          Product::create([
            'id_user' => $request->userid,
            'slucy_id' => $request->regist,
            'product_name' => $request->product,
            'timer_set' => null,
            'timer_until' => null,
            'days' => null,
            'power' => 'Off',
            'action' => 'In'
            ]);

            return redirect('home')->with('success', 'Product berhasil ditambahkan');

        }

        public function Out($id, Request $request){
            $product    = Product::findorfail($id);

            $data = [
                'action' => 'Out'
            ];

            $product->update($data);

            return redirect()->back()->with('out', 'Out');
        }

        public function In(Request $request){
            $data = [
                'action' => 'In'
            ];

            $in = Product::where('action', 'like', 'Out')->when($request->slucyid, function ($query) use ($request) {
                $query->where('slucy_id', 'like', $request->slucyid);
            })->update($data);

            if($in){
                return redirect('home')->with('in', 'In');
            }
            else{
                return redirect()->back()->with('error', 'Slucy Id yang anda masukan Tidak terdaftar atau sudah terdaftar!!');
            }
        }
        public function changePower(Request $request)
        {
            $power = Product::find($request->id);
            $power->power = $request->power;
            $power->save();

            return response()->json(['success'=>'Status change successfully.']);
        }
        public function setTime($id, Request $request){
            $status = Product::findorfail($id);

            $data = [
                'timer_set' => $request->timer_set,
                'timer_until' => $request->timer_until
            ];

            $status->update($data);

            return redirect()->back()->with('set', 'set');
        }
        public function day(Request $request){
            RepeatDays::where('id_product',$request->id)->delete();
            $dataSelected = $request->input('day');

            if(!empty($dataSelected)){
                foreach($dataSelected as $row){
                    RepeatDays::create([
                        'id_product' => $request->id,
                        'days'       => $row
                    ]);
                }
            }
            
            return redirect()->back()->withInput();
        }
        public function testTimeUpdate(Request $request, $id){
            $timesetData = \DB::table('product')->select('product.timer_set')->where('id', $id)->first();
            $timeuntilData = \DB::table('product')->select('product.time_until')->where('id', $id)->first();
            $timeset = Carbon::parse($timesetData->timer_set)->format('H:i');
            $timeuntil = Carbon::parse($timeuntilData->time_until)->format('H:i');

            $getTimeNow = Carbon::now();
            $timeNow = $getTimeNow->format('H:i');
            if($timeset == $timeNow){
                $update = \DB::table('product')->where('id', $id)->update([
                    'power' => "On"
                ]);

                return response()->json($update);
            }
            if($timeuntil == $timeNow){
                $update = \DB::table('product')->where('id', $id)->update([
                    'power' => "Off"
                ]);

                return response()->json($update);
            }
            return response()->json($timeNow);
        }
}
