<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+917549225345';
        $this->comp['phonehtml'] = 'tel:+91 7549225345';
        $this->comp['supportmail'] = 'support@rahul.in';
        $this->comp['replyToMail'] = 'info@rahul.in';
        $this->comp['mail'] = 'rahulhardik7@gmail.com';
        $this->comp['mailhtml'] = "mailto:rahulhardik7@gmail.com";
        $this->comp['company3'] = 'Techelevatr';
        $this->comp['companydomain'] = 'techelevatr.in';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedinhtml'] = "";
        $this->comp['whatsapphtml'] = "";

        $this->comp['address'] = "<address>S-6, 7, 1258, Goswami Bhawan,
                Kho Walon Ka Chowk, Gopal Ji Ka Rasta,Johari Bazar, Jaipur – 03</address>";
        $this->comp['address1'] = "S-6, 7, 1258, Goswami Bhawan,  Kho Walon Ka Chowk";
        $this->comp['address2'] = "Gopal Ji Ka Rasta,Johari Bazar, jaipur";
        $this->comp['addressRegion'] = "Jaipur";
        $this->comp['postalCode'] = "302003";
        $this->comp['companystate'] = "Rajasthan";
        $this->comp['themeColor'] = "#e21b22";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "JPM28957";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "3839";
        $this->comp['datePublished'] = "11 january, 2026";
        $this->comp['reviewBody'] = " My items were securely affordable, and stress-free.";
        $this->comp['reviewperson'] = "Rahul kumar";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
