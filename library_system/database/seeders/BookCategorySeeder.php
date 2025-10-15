<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookCategory;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookCategory::create([
            'category_name' => 'Fiction',
            'description' => 'Fictional works including novels and short stories.'
        ]);

        BookCategory::create([
            'category_name' => 'Non-Fiction',
            'description' => 'Informative and factual books.'
        ]);

        BookCategory::create([
            'category_name' => 'Science Fiction',
            'description' => 'Books based on futuristic concepts and advanced technology.'
        ]);

        BookCategory::create([
            'category_name' => 'Biography',
            'description' => 'Life stories of notable individuals.'
        ]);

        BookCategory::create([
            'category_name' => 'Mystery',
            'description' => 'Books that involve solving a crime or uncovering secrets.'
        ]);

        BookCategory::create([
            'category_name' => 'Fantasy',
            'description' => 'Books that contain magical or supernatural elements.'
        ]);
    }
}
