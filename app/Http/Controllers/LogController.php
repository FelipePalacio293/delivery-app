<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Device;
use App\Models\Domicilio;
use App\Models\User;
use App\Notifications\LogErrorNotification;

class LogController extends Controller
{
    public function store(Request $request)
    {
        $locationLogs = [];
        // Check if the file is present and is a valid txt file
        if ($request->hasFile('logfile') && $request->file('logfile')->isValid() && $request->file('logfile')->extension() === 'txt') {

            // Open the file
            $file = fopen($request->logfile->path(), "r");
            $x = 0;
            // Read the file line by line
            while (!feof($file)) {
                $line = fgets($file);

                // Break the line into key value pair
                $line_parts = explode(": ", $line);
                if($x === 3) {
                    // return response()->json(trim($line_parts[0]));
                }
                switch (trim($line_parts[0])) {
                    
                    case 'DeviceName':
                        $deviceName = trim($line_parts[1]);
                        break;

                    case 'StartTime':
                        
                        $startTime = Carbon::createFromFormat('H:i:s', trim($line_parts[1]));
                        break;

                    case 'EndTime':
                        
                        $endTime = Carbon::createFromFormat('H:i:s', trim($line_parts[1]));
                        break;

                    case 'LocationLogs:':
                        // Read the location logs
                        while ($log_line = fgets($file)) {
                            $log_parts = explode(", ", $log_line);
                            
                            if(isset($log_parts[0]) && isset($log_parts[1])){
                                $locationLogs[] = [
                                    'lat' => floatval($log_parts[0]),
                                    'lng' => floatval($log_parts[1]),
                                    // 'timestamp' => Carbon::createFromFormat('H:i:s', trim($log_parts[2])),
                                ];
                            }
                        }
                        break;
                    case 'Error':
                        // return response()->json($line_parts);
                        $users = User::all();
                        foreach ($users as $user) {
                            $user->notify(new LogErrorNotification());
                        }
                        break;
                    case 'Batery':
                        $batery = floatval($line_parts[1]);
                        break;
                }

                $x += 1;
            }

            fclose($file);
            
            $device = Device::where('name', $deviceName)->first();


            if (!$device) {
                return response()->json(['message' => 'Device not found'], 404);
            }
            else {
                $device->battery_level = $batery;
                $device->save();
            }

            $domicilio = new Domicilio;
            $domicilio->inicio = $startTime;
            $domicilio->fin = $endTime;
            $domicilio->recorrido = json_encode($locationLogs);
            $domicilio->estado = 'completed';
            $domicilio->pedido_id = $device->id;
            $domicilio->save();

            return response()->json(['message' => 'Log saved successfully']);
        }

        return response()->json(['message' => 'Invalid file'], 400);
    }

}
