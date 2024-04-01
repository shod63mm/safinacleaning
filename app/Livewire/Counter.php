<?php
 
namespace App\Livewire;
 
use Livewire\Component;
 
class Counter extends Component
{
    public $plus = 0;
 
    public $minus = 0;
     
    public function up()
    {
    $this->plus++;
    }
     
    public function down()
    {
    $this->minus++;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}