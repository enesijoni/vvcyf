<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blogpic;

class BlogsData extends Component
{
       public $amount = 3;


    public function loadmore(){
    
         $this->amount +=3;
   }

    public function render()
    {

        $frontimg = Blogpic::take($this->amount)->get();

        return view('livewire.blogs-data')->with(compact('frontimg'));
    }

    
}
