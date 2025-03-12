<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Sheets;

class PaymentController extends Controller
{
    public function index()
    {
        // Inisialisasi Google Client
        $client = new Google_Client();
        $client->setApplicationName('Laravel Google Sheets');
        $client->setScopes([Google_Service_Sheets::SPREADSHEETS_READONLY]);
        $client->setAuthConfig(storage_path('app/credentials.json'));

        $service = new Google_Service_Sheets($client);

        // Ambil data dari Spreadsheet
        $spreadsheetId = env('GOOGLE_SHEET_ID');
        $range = 'Sheet1!A1:D'; // Sesuaikan dengan Sheet dan range kamu

        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();

        // Kirim ke view
        return view('admin.payments.index', compact('values'));
    }

    // Fungsi store dihapus jika tidak digunakan, karena kita hanya menampilkan data saja
}
