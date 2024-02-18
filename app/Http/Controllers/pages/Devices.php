<?php

namespace App\Http\Controllers\pages;


use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\So;
use Illuminate\Support\Facades\Storage;
use App\Exports\DeviceExport;
use Maatwebsite\Excel\Facades\Excel;


class Devices extends Controller
{
    public function index()
    {
        $devices = Device::all();
        $types = Type::all();
        
        return view('content.pages.devices', compact('devices','types'));
    }

    public function create()
    {
        $sos = So::where('active',true)->get();
        $types = Type::where('active',true)->get();
        return view('content.pages.devices-create', compact('sos', 'types'));

    }

    public function store(Request $request)
{
    $validator = $request->validate([
        'name' => 'required',
        
        // Agrega otras validaciones según tus necesidades
    ]);

        $device = new Device();
        
        $device->type_id = $request->type_id;
        $device->sos_id = $request->sos_id; 
        $device->name = $request->name;
        $device->description = $request->description;
        $device->serial_number = $request->serial_number ?? null;
        $device->mac_address = $request->mac_address ?? null;
        $device->ip_address = $request->ip_address ?? null;
        $device->model = $request->model ?? null;
        $device->manufacturer = $request->manufacturer ?? null;
        $device->firmware = $request->firmware ?? null;
        $device->stock = $request->stock ?? null;
        $device->hdd = $request->hdd ?? null;
        $device->ram = $request->ram ?? null;
        $device->stock = $request->stock ?? 1;
        $device->cpu = $request->cpu ?? null;
        $device->gpu = $request->gpu ?? null;
        $device->total_slot = $request->total_slot ?? null;
        $device->history = $request->history ?? null;
        $device->save();
    
        return redirect()->route('pages-devices');
    }
    

    
    public function show($device_id){
        $device = Device::find($device_id);
        $sos = So::where('active',true)->get();
        $types = Type::where('active',true)->get();
        return view('content.pages.devices-show', compact('device', 'sos', 'types'));
    }
    
    public function update(Request $request){
        $validator = $request->validate([
            'name' => 'required',
        ]);
            
        $device = Device::find($request->device_id);    
        if ($request->hasFile('fileLogo')) {
            $file = $request->file('fileLogo');
            $name = time() . $file->getClientOriginalName();
            $filePath = '/public/' . $name;
            Storage::put($filePath, file_get_contents($file));
            
            $url = Storage::url($filePath);
            $array = explode('/storage//public/', $url);
            $device->image_url = '/storage/'.$array[1];
        }
        $device->name = $request->name;
        $device->description = $request->description;
        $device->sos_id = $request->sos_id;
        $device->type_id = $request->type_id; 
        $device->serial_number = $request->serial_number ?? null;
        $device->mac_address = $request->mac_address ?? null;
        $device->ip_address = $request->ip_address ?? null;
        $device->model = $request->model ?? null;
        $device->manufacturer = $request->manufacturer ?? null;
        $device->firmware = $request->firmware ?? null;
        $device->stock = $request->stock ?? null;
        $device->hdd = $request->hdd ?? null;
        $device->ram = $request->ram ?? null;
        $device->stock = $request->stock ?? 1;
        $device->cpu = $request->cpu ?? null;
        $device->gpu = $request->gpu ?? null;
        $device->total_slot = $request->total_slot ?? null;
        $device->history = $request->history ?? null;
        $device->save();
    
       return redirect()->route('pages-devices');

    }
    
    public function destroy($device_id)
    {
        $device = Device::find($device_id);
        $device->delete();
        return redirect()->route('pages-devices');

    }
    public function switch($device_id){
        $device = Device::find($device_id);
        $device->active = !$device->active;
        $device->save();
        return redirect()->route('pages-devices');
      }
    public function export(){
        return Excel::download(new DeviceExport, 'devices.xlsx');
    }  

}