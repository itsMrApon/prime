<?php
namespace App\Http\Controllers\User;
use Illuminate\Routing\Controller;
class PagesController extends Controller
{
  public function home(){
    return view('front.pages.index4');}
  public function aboutus(){
    return view('front.pages.aboutus');}
  public function calculator(){
    return view('front.pages.calculator');}
  public function contact(){
    return view('front.pages.contact');}
  public function faq(){
    return view('front.pages.faq');}
  public function portfolio(){
    return view('front.pages.protfolio');}
  public function portfoliodetails(){
    return view('front.pages.portfoliodetails');}
  public function pricing(){
    return view('front.pages.pricing');}
  public function team(){
    return view('front.pages.team');}
  public function team1(){
    return view('front.pages.team1');}
  public function team2(){
    return view('front.pages.team2');}
  public function testimonial(){
    return view('front.pages.testimonial');}
  public function testimonial1(){
    return view('front.pages.testimonial1');}
  public function testimonial2(){
    return view('front.pages.testimonial2');}
  public function testimonial3(){
    return view('front.pages.testimonial3');}
  public function about(){
    return view('front.pages.about');}
}

