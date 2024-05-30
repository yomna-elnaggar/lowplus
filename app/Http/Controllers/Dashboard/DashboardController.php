<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Sale;
use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Contactus;
use App\Traits\storeImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\CustomNotification;
use App\Notifications\TestPusherNotification;

class DashboardController extends Controller
{
    use storeImage;

    public function backup()
    {
        // Set the database credentials
        $dbHost = config('database.connections.mysql.host');
        $dbUsername = config('database.connections.mysql.username');
        $dbPassword = config('database.connections.mysql.password');
        $dbName = config('database.connections.mysql.database');

        // Specify the path where you want to save the database dump file
        $backupPath = storage_path('app/database_backups');

        // Ensure the directory exists
        if (!file_exists($backupPath)) {
            mkdir($backupPath, 0755, true);
        }

        // Generate a unique filename for the backup
        $backupFileName = 'backup_' . date('Y-m-d_H-i') . '.sql';

        // Build the mysqldump command
        $command = "mysqldump --host={$dbHost} --user={$dbUsername} --password={$dbPassword} {$dbName} > {$backupPath}/{$backupFileName}";

        // Execute the command
        exec($command);

        // Provide a download link to the user
        return response()->download("{$backupPath}/{$backupFileName}");
    }

    public function index()
    {
        return view('dashboard.index');
    }
}
