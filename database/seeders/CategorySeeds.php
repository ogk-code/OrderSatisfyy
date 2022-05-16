<?php

namespace Database\Seeders;

use App\Models\SubСategories;
use App\Models\Сategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Создание категорий
        $categoryId = $this->createCategory("Домашний мастер");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Электрик");
        $this->createSubCategory($categoryId, "Муж на час");
        $this->createSubCategory($categoryId, "Столяр");
        $this->createSubCategory($categoryId, "Слесарь");


        // Создание категорий (2)
        $categoryId = $this->createCategory("Домашний мастер2");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Электрик2");
        $this->createSubCategory($categoryId, "Муж на час2");
        $this->createSubCategory($categoryId, "Столяр2");
        $this->createSubCategory($categoryId, "Слесарь2");


        // Создание категорий (3)
        $categoryId = $this->createCategory("Домашний мастер3");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Электрик3");
        $this->createSubCategory($categoryId, "Муж на час3");
        $this->createSubCategory($categoryId, "Столяр3");
        $this->createSubCategory($categoryId, "Слесарь3");

    }
    private function createCategory($categoryName){
        $category = new Сategories();
        $category->name = $categoryName;
        $category->save();
        return $category->id;
    }
    private function createSubCategory($categoryId, $subCategoryName){
        $subCategory = new SubСategories();
        $subCategory->name = $subCategoryName;
        $subCategory->category_id = $categoryId;
        $subCategory->save();
    }
}
