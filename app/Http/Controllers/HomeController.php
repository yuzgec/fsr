<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Page;
use App\Models\Pivot;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        SEOMeta::setTitle("FSR Kimya");
        SEOMeta::setDescription("FSR Kimya");
        SEOMeta::setCanonical(url()->full());
        $Hakkimizda = Page::where('id', '=',1)->first();
        $Brand =  ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18'];
        return view('frontend.index', compact('Hakkimizda','Brand'));
    }



    public function categorydetail($url)
    {
        $Detay = ProductCategory::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        views($Detay)->cooldown(60)->record();

        $Category = ProductCategory::where('parent_id',$Detay->id)->get();

        $Product =  Product::where('category',$Detay->id)->get();

        SEOMeta::setTitle($Detay->title.' | FSR Kimya');
        SEOMeta::setDescription("FSR Kimya");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.category.index', compact('Detay', 'Product', 'Category'));
    }

    public function corporatedetail($url)
    {
        $Detay = Page::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        views($Detay)->cooldown(60)->record();

        SEOMeta::setTitle($Detay->title.' | FSR Kimya');
        SEOMeta::setDescription("FSR Kimya");
        SEOMeta::setCanonical(url()->full());


        return view('frontend.corporate.detail', compact('Detay'));
    }

    public function productdetail($url)
    {
        $Detay = Product::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        views($Detay)->cooldown(60)->record();


        SEOMeta::setTitle($Detay->title.' | Deri Makinaları | FSR Kimya');
        SEOMeta::setDescription("FSR Kimya");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.product.index', compact('Detay'));
    }

    public function partdetail($url)
    {
        $Detay = Product::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        views($Detay)->cooldown(60)->record();
        SEOMeta::setTitle($Detay->title.' | Yedek Parça | FSR Kimya');
        SEOMeta::setDescription("FSR Kimya");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.product.index', compact('Detay'));
    }

    public function gallery(){

        return view('frontend.gallery.index');
    }

    public function contactus(){
        SEOMeta::setTitle('İletişim | FSR Kimya');
        SEOMeta::setDescription("FSR Kimya");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.corporate.contactus');
    }


    public function reference(){

        return view('frontend.reference.index');
    }

    public function blog(){

        return view('frontend.blog.index');
    }

}
