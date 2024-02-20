<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backup;
use App\Jobs\BackupProcess;




class Backups extends Controller
{
    //
    public function index(){

        $backups = Backup::all();
        
        return view('content.pages.backups', compact('backups'));
    }

    public function create(){

        BackupProcess::dispatch();

        
        return redirect()->route('pages-backups');
    }

    public function delete($id){
        $backup = Backup::find($id);
    
        // Construye la ruta al archivo de copia de seguridad
        $storagePath = storage_path().'/app/public/backups/';
        $filename = "backup_".$backup->created_at->format('Y-m-d-H-i-s').".sql";
        $filePath = $storagePath.$filename;
    
        // Verifica si el archivo existe antes de intentar eliminarlo
        if (file_exists($filePath)) {
            // Elimina el archivo
            unlink($filePath);
        }
    
        $backup->delete();
    
        return redirect()->route('pages-backups');
    }
    
}
