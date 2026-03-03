<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Products extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_products');
    }
    public function gem()
    {
        // show single gem using g_key (expects URL: /gem/{g_key})
        $gkey = func_get_arg(0) ?: null;
        if (!$gkey) {
            show_404();
            return;
        }

        $item = $this->mdl_products->get_item_by_gkey($gkey);
        if (!$item) {
            show_404();
            return;
        }

        // related items: prefer same birthstone if set, else same category
        $related = $this->mdl_products->get_related_items($item['id'], $item['category'], $item['birthstone'], 6);
        $categories = $this->mdl_products->get_categories($item['id']);

        $data['item'] = $item;
        $data['related'] = $related;
        $data['categories'] = $categories;
        $data['title'] = $item['title'];
        $data['description'] = substr(strip_tags($item['description']), 0, 160);
        $data['module'] = 'products';
        $data['view_file'] = 'gem';

        echo Modules::run('template/layout2', $data);
    }
    public function birthstone()
    {
        
            $items = $this->mdl_products->get_items_by_birthstone();

        $data['items'] = $items;
        $data['title'] = 'Birthstones';
        $data['description'] = '';
        $data['module'] = 'products';
        $data['view_file'] = 'birthstone';

        echo Modules::run('template/layout2', $data);
    }
    public function precious()
    {
        // show precious gems where category == Precious
        $items = $this->mdl_products->get_items_by_category('Precious');

        $data['items'] = $items;
        $data['title'] = 'Precious Gems';
        $data['description'] = '';
        $data['module'] = 'products';
        $data['view_file'] = 'precious';

        echo Modules::run('template/layout2', $data);
    }
    public function semiprecious()
    {
        // show semiprecious gems where category == Semi-Precious
        $items = $this->mdl_products->get_items_by_category('Semi-Precious');

        $data['items'] = $items;
        $data['title'] = 'Semi-Precious Gems';
        $data['description'] = '';
        $data['module'] = 'products';
        $data['view_file'] = 'semiprecious';

        echo Modules::run('template/layout2', $data);
    }
    function brac()
    {
        // load bracelets from database and pass to view
        $bracelets = $this->mdl_products->get_all_bracelets();

        $data['bracelets'] = $bracelets;
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "products";
        $data['view_file'] = "brac";
        echo Modules::run('template/layout2', $data);
    }
    // Display a bracelet page by b_key (example: /bracelet/brac12345678)
    public function bracelet($bkey = null)
    {
        if (!$bkey) {
            show_404();
            return;
        }

        // use model to fetch bracelet by b_key
        $product = $this->mdl_products->get_bracelet_by_bkey($bkey);

        if (!$product) {
            show_404();
            return;
        }

        // get related bracelets, exclude current
        $related = $this->mdl_products->get_related_bracelets($product['id'], 5);

        $data['product'] = $product;
        $data['related'] = $related;
        $data['title'] = $product['title'];
        $data['description'] = substr(strip_tags($product['description']), 0, 160);
        $data['module'] = 'products';
        $data['view_file'] = 'bracelet';

        echo Modules::run('template/layout2', $data);
    }
}
