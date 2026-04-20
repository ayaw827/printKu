<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = [
            [
                'title' => 'Print Dokumen',
                'price' => 'Mulai Rp500',
                'desc' => 'Print hitam putih dan warna untuk tugas, proposal, dan dokumen kantor.'
            ],
            [
                'title' => 'Fotocopy',
                'price' => 'Mulai Rp300',
                'desc' => 'Fotocopy cepat dan hemat untuk kebutuhan sekolah, kampus, dan usaha.'
            ],
            [
                'title' => 'Scan Dokumen',
                'price' => 'Mulai Rp1.000',
                'desc' => 'Scan dokumen ke PDF atau gambar dengan hasil jelas dan rapi.'
            ],
            [
                'title' => 'Jilid',
                'price' => 'Mulai Rp5.000',
                'desc' => 'Jilid makalah, proposal, laporan, dan skripsi dengan rapi.'
            ],
            [
                'title' => 'Laminating',
                'price' => 'Mulai Rp3.000',
                'desc' => 'Melindungi dokumen penting agar lebih awet dan tahan lama.'
            ],
            [
                'title' => 'Print Warna',
                'price' => 'Mulai Rp1.500',
                'desc' => 'Cocok untuk brosur, cover tugas, presentasi, dan desain.'
            ],
        ];

        return view('home', compact('services'));
    }
}