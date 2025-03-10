<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Google_Client;
use Google_Service_Sheets;

class SpreadsheetController extends Controller
{
    public function index()
    {
        // Inisialisasi Google Client
        $client = new Google_Client();
        $client->setApplicationName('Laravel Google Sheets');
        $client->setScopes([Google_Service_Sheets::SPREADSHEETS_READONLY]);
        $client->setAuthConfig(storage_path('app/credentials.json'));
        $service = new Google_Service_Sheets($client);

        // Ambil data dari Sheet
        $spreadsheetId = env('GOOGLE_SHEET_ID');
        $range = 'Sheet1!A1:C'; // Ganti dengan nama sheet dan range kamu
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();

        return view('spreadsheet.index', compact('values'));
    }
}
