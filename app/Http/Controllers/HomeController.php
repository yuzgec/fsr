<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Pivot;
use App\Models\Product;
use App\Models\ProductCategory;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    public function index(){
        SEOMeta::setTitle("FSR Kimya");
        SEOMeta::setDescription("FSR Kimya");
        SEOMeta::setCanonical(url()->full());
        $Hakkimizda = Page::where('id', '=',1)->first();

        $Blog = Blog::all();
        return view('frontend.index', compact('Hakkimizda','Blog'));
    }

    public function demo(){

        SEOMeta::setTitle("FSR Kimya");
        SEOMeta::setDescription("FSR Kimya");
        SEOMeta::setCanonical(url()->full());
        $Hakkimizda = Page::where('id', '=',1)->first();

        $Blog = Blog::all();
        return view('frontend.index', compact('Hakkimizda','Blog'));
    }

    public function categorydetail($url)
    {
        $Detay = ProductCategory::with('getProduct')->whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        $Count = views($Detay)->cooldown(60)->record();

        $Category = ProductCategory::where('parent_id',$Detay->id)->get();

        $Product =  Product::whereHas('getCategory',  function ($query) use ($Detay) {
            $query->where('category_id', $Detay->id);
        })->get();

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

        $Count = views($Detay)->cooldown(60)->record();

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

        $Product =  Product::whereHas('getCategory',  function ($query) use ($Detay) {
            $query->where('product_id', $Detay->id);
        })->limit(12);

        $Count = views($Detay)->cooldown(60)->record();

        SEOMeta::setTitle($Detay->title.' | FSR Kimya');
        SEOMeta::setDescription("FSR Kimya");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.product.index', compact('Detay', 'Product'));
    }

    public function blog(){
        $All = Blog::all();
        return view('frontend.blog.index',compact('All'));
    }


    public function newdetail($url)
    {
        $Detay = Blog::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        $Count = views($Detay)->cooldown(60)->record();

        SEOMeta::setTitle($Detay->title.' | FSR Kimya');
        SEOMeta::setDescription("FSR Kimya");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.blog.detail', compact('Detay'));
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


}
