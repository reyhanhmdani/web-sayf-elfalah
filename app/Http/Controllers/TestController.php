<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAssetUrl()
    {
        $url = asset("storage/teacher-documents/SimC.pdf");
        dd($url); // Tampilkan URL dan hentikan eksekusi
    }
}
