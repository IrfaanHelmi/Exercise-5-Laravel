<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
 public function about () {
 return view('about');
 }
 

 public function bookslist () {
     
    $bookslist = [['The Prince','Philosophy',1234, '112-2-33-445566-0'],['Moby Dick','Fiction', 1200, '223-5-23-973526-0'],['The Great Gatsby','Fiction', 1560, '734-5-35-1126743-0'],['Into The Wild','Non-Fiction', 1560, '334-5-35-345678-0'],['A Crooked Tree','Fiction', 1340, '994-5-35-345678-0']];
      
    return view('list') ->with('b',$bookslist);
 }
} 