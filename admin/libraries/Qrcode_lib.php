<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once __DIR__ . '/../vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;

class Qrcode_lib
{
    /**
     * Generate QR code and save as PNG
     */
    public function generate($data, $filename)
    {
        $result = Builder::create()
            ->writer(new PngWriter())
            ->data($data)
            ->size(300)
            ->margin(10)
            ->build();

        $savePath = FCPATH . 'assets/qrcodes/' . $filename;

        $result->saveToFile($savePath);

        return $filename;
    }
}
