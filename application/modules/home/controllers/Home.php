<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "Error";
        $data['description'] = "Error Page";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = "Ananya Gems | Certified Gemstones & Jewelry Experts";
        $data['description'] = "Ananya Gems offers certified gemstones, diamond testing, gemstone authentication, and premium jewelry services with trusted quality and professional standards.";
        $data['keywords'] = "Ananya Gems, Certified Gemstones, Gemstone Certification, Diamond Testing, Precious Stones, Semi Precious Stones, Ruby, Emerald, Sapphire, Diamond Certification, Gem Identification, Jewelry Certification, Authentic Gemstones, Gem Testing Lab, Jewelry Experts, Trusted Gemstones India";

        // Load products model to fetch bracelets and gems for home page
        $this->load->model('products/mdl_products');

        // Bracelets from `bracelet` table
        $data['bracelets'] = $this->mdl_products->get_all_bracelets(12);

        // Gems from `items` table
        $data['precious'] = $this->mdl_products->get_items_by_category('Precious', 15);
        $data['semiprecious'] = $this->mdl_products->get_items_by_category('Semi-Precious', 15);
        $data['birthstones'] = $this->mdl_products->get_items_by_birthstone();

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }
    public function oldurl_to_newurl()
    {
        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}
