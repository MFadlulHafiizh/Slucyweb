<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class ApiserviceController extends Controller
{
    public function handle()
    {
        $took = DB::table('product')->select('product.slucy_id','product.timer_set', 'product.timer_until', 'repeat_days.days')
        ->leftJoin('repeat_days', 'product.id', '=', 'repeat_days.id_product')
        ->get();

        $getTimeNow = Carbon::now();
        $timeNow = $getTimeNow->format('H:i');  //output : 08:00 etc
        $daysNow = $getTimeNow->format('l');    //ouput Friday, Saturday, etc

        foreach($took as $row){
            $timersetData['timer_set'] = Carbon::parse($row->timer_set)->format('H:i');
            $timerUntilData['timer_until'] = Carbon::parse($row->timer_until)->format('H:i');
            $days['days'] = $row->days;
            $slucyid['slucy_id'] = $row->slucy_id; 
            $formattedData[] = array_merge($slucyid, $timersetData, $timerUntilData, $days);

        }

        foreach($formattedData as $row){
            // ini jika hari tidak disetel
            if($row['days'] == null){
                $this->checkTime($row, $timeNow);
            }
            
            //jika hari dan waktu sudah disetel
            else{
                if($row['days'] == $daysNow){
                    $this->checkTime($row, $timeNow);
                    echo "ayee";
                }
            }
        }
    }
    public function checkTime($row, $timeNow){
        //jika timer set sesuai dengan realtime
        if($row['timer_set'] == $timeNow){
            $update = DB::table('product')->where('timer_set', $row['timer_set'])->update([
                'power' => "On"
            ]);
            echo "SLucyId = ".$row['slucy_id'] . " Power On";
        }else{
            echo "SLucyId = ".$row['slucy_id'] . " Not set on now";
        }

        //jika realtime sama dengan batas waktu yg disetel
        if($row['timer_until'] == $timeNow){
            $update = DB::table('product')->where('timer_until', $row['timer_until'])->update([
                'power' => "Off"
            ]);
            echo "SLucyId = ".$row['slucy_id'] . " Power Off";
        }else{
            echo " and Not set off now";
            echo "</br>";
        }
    }

    public function arduinoStat(Request $request){
        $getDataValues = DB::table('product')->select('slucy_id','power')
        ->where('slucy_id', $request->slucy_id)->get();

        return response()->json($getDataValues);
    }
}
