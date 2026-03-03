<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once __DIR__ . '/../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

class Dompdf_lib
{
    protected $dompdf;

    /**
     * Dompdf_lib constructor.
     * Initializes Dompdf with default options.
     */
    public function __construct()
    {
        $options = new Options();
        $options->set('isRemoteEnabled', true); // allow images from remote URLs
        $options->set('defaultFont', 'Arial');    // set default font

        $this->dompdf = new Dompdf($options);
    }

    /**
     * Generate PDF from HTML.
     *
     * @param string $html HTML content to convert to PDF.
     * @param string $filename Output PDF file name.
     * @param bool $attachment If true, forces download; if false, opens in browser.
     */
    public function generate_pdf($html, $filename = 'document.pdf', $attachment = false)
    {
        $this->dompdf->loadHtml($html);

        // Paper size and orientation
        $this->dompdf->setPaper('A4', 'portrait');

        // Render HTML as PDF
        $this->dompdf->render();

        // Stream PDF to browser
        $this->dompdf->stream($filename, [
            "Attachment" => $attachment ? 1 : 0
        ]);
    }
}  
