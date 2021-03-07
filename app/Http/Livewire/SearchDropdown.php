<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';
    
    public function render()
    {
        $searchResults = [];
        
        if (strlen($this->search) >= 2) {
            $searchResults = Course::where('name', 'LIKE', "%$this->search%")
                                    ->orWhere('about', 'LIKE', "%$this->search%")
                                    ->orWhere('features', 'LIKE', "%$this->search%")
                                    ->get();
        }
        
        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}