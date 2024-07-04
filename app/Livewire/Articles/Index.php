<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $filteredByCategory;
    public $search = "";

    public function createFilter()
    {
        return Article::orderBy('created_at', 'desc')->paginate(12);
    }

    public function categoryFilter()
    {
        return Article::where('category_id', $this->filteredByCategory)->get();
    }
    public function render($id = null)
    {
       if(!$this->filteredByCategory || $this->filteredByCategory == 'AllCategories'){
                $articles = $this->createFilter();
       } else {
        $articles = $this->categoryFilter();
       }
        $categories = Category::all();
        return view('livewire.articles.index',['articles'=>Article::paginate(10), 'categories'=>$categories, 'id'=>$id]);
    }
}