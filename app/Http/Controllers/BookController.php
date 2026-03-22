<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public $books = [
        
        ['id' =>1, 'titolo' => 'Il grande Gatsby', 'autore' => 'F. Scott Fitzgerald', 'img'=> 'https://m.media-amazon.com/images/I/818gYdgYmsL.jpg'],
         ['id' =>2, 'titolo' => '1984', 'autore' => 'George Orwell', 'img'=> 'https://giunti.it/cdn/shop/files/20260303_574c3db7cc734a82bd80ddab07c6d2ff.jpg?v=1772504486'],
        ['id' =>3, 'titolo' => 'Il piccolo Principe', 'autore' => 'Antoine de Saint-Exupery', 'img'=> 'https://www.feltrinellieditore.it/media/copertina/quarta/90/9788807901690_quarta.jpg.800x800_q75.jpg'],
       ['id' =>4, 'titolo' => 'Lo Hobbit', 'autore' => 'J.R.R. Tolkien', 'img'=> 'https://m.media-amazon.com/images/I/91VtuX46+nL._UF1000,1000_QL80_.jpg'],
    ];

public function index(){
    return view('index', ['books' => $this->books]);
}

public function show($id){
    foreach($this->books as $book){
        if($book['id'] == $id){
            return view('show', ['book' => $book]);
        }
    }
}





}
