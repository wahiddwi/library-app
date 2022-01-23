<?php

namespace App\Http\Livewire;

use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $create, $category_name, $edit;

    protected $rules = [
        'category_name' => 'required|min:5'
    ];

        public function store()
        {
            $this->validate();
            ModelsCategory::create([
                'category_name' => $this->category_name,
                'slug' => Str::slug($this->category_name)
            ]);

            session()->flash('success', 'Kategori Berhasil ditambahkan');

            $this->format();
        }

        public function edit(ModelsCategory $category)
        {
            $this->edit = true;
            $this->category_name = $category->category_name;
            $this->category_id = $category->id;
        }

    public function create()
    {
        $this->create = true;
    }

    public function render()
    {
        return view('livewire.category', [
            'category' => ModelsCategory::latest()->paginate(8)
        ]);
    }

    public function format()
    {
        unset($this->category_name);
        unset($this->create);
    }
}
