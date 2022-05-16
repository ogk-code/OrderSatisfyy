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
		$this->createSubCategory($categoryId, "Сантехник");
        $this->createSubCategory($categoryId, "Электрик");
        $this->createSubCategory($categoryId, "Муж на час");
        $this->createSubCategory($categoryId, "Столяр");
        $this->createSubCategory($categoryId, "Слесарь");


        // Создание категорий (2)
        $categoryId = $this->createCategory("Отделочные работы");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Ремонт квартир");
        $this->createSubCategory($categoryId, "Уладка плитки");
        $this->createSubCategory($categoryId, "Штукатурные работы");
        $this->createSubCategory($categoryId, "Утепление помещений");
		$this->createSubCategory($categoryId, "Монтаж отопления");

		// Создание категорий (3)
        $categoryId = $this->createCategory("Клининговые услуги");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Уборка квартир");
        $this->createSubCategory($categoryId, "Генеральная уборка");
        $this->createSubCategory($categoryId, "Уборка после ремонта");
        $this->createSubCategory($categoryId, "Химчистка");
		$this->createSubCategory($categoryId, "Уборка коттеджей и домов");

		// Создание категорий (4)
        $categoryId = $this->createCategory("Курьерские услуги");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Курьерская доставка");
        $this->createSubCategory($categoryId, "Доставка продуктов");
        $this->createSubCategory($categoryId, "Доставка готовой еды");
        $this->createSubCategory($categoryId, "Доставка лекарств");
		$this->createSubCategory($categoryId, "Курьер на авто");

		// Создание категорий (5)
        $categoryId = $this->createCategory("Строительные работы");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Разнорабочие");
        $this->createSubCategory($categoryId, "Сварочные работы");
        $this->createSubCategory($categoryId, "Токарные работы");
        $this->createSubCategory($categoryId, "Плотник");
		$this->createSubCategory($categoryId, "Кладка кирпича");

		// Создание категорий (6)
        $categoryId = $this->createCategory("Ремонт техники");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Ремонт крупной бытовой техники");
        $this->createSubCategory($categoryId, "Ремонт мелкой бытовой техники");
        $this->createSubCategory($categoryId, "Компьютерная помощь");
        $this->createSubCategory($categoryId, "Ремонт цифровой техники");
		$this->createSubCategory($categoryId, "Ремонт мобильных телефонов");

		// Создание категорий (7)
        $categoryId = $this->createCategory("Логистические и складские услуги");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Грузоперевозкии");
        $this->createSubCategory($categoryId, "Услуги грузчиков");
        $this->createSubCategory($categoryId, "Вывоз строительного мусора");
        $this->createSubCategory($categoryId, "Перевозка мебели и техники");
		$this->createSubCategory($categoryId, "Переезд квартиры или офиса");

		// Создание категорий (8)
        $categoryId = $this->createCategory("Бытовые услуги");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Сад и огород");
        $this->createSubCategory($categoryId, "Няни");
        $this->createSubCategory($categoryId, "Услуги сиделки");
        $this->createSubCategory($categoryId, "Услуги домработницы");
		$this->createSubCategory($categoryId, "Услуги швеи");

		// Создание категорий (9)
        $categoryId = $this->createCategory("Мебельные работы");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Изготовление мебели");
        $this->createSubCategory($categoryId, "Ремонт мебели");
        $this->createSubCategory($categoryId, "Сборка мебели");
        $this->createSubCategory($categoryId, "Реставрация мебели");
		$this->createSubCategory($categoryId, "Перетяжка мебели");

		// Создание категорий (10)
        $categoryId = $this->createCategory("Работа в Интернете");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Копирайтинг");
        $this->createSubCategory($categoryId, "Сбор, поиск информации");
        $this->createSubCategory($categoryId, "Наполнение сайтов");
        $this->createSubCategory($categoryId, "Набор текста");
		$this->createSubCategory($categoryId, "Рерайтинг");

		// Создание категорий (11)
        $categoryId = $this->createCategory("Дизайн");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Разработка логотипов");
        $this->createSubCategory($categoryId, "Дизайн интерьера");
        $this->createSubCategory($categoryId, "Дизайн сайта");
        $this->createSubCategory($categoryId, "Дизайн полиграфии");
		$this->createSubCategory($categoryId, "Услуги печати");

		// Создание категорий (12)
        $categoryId = $this->createCategory("Разработка сайтов и приложений");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Создание сайтов");
        $this->createSubCategory($categoryId, "Доработка сайта");
        $this->createSubCategory($categoryId, "Создание целевой страницы");
        $this->createSubCategory($categoryId, "Продвижение сайтов");
		$this->createSubCategory($categoryId, "Верстка сайта");

		// Создание категорий (13)
        $categoryId = $this->createCategory("Разработка сайтов и приложений");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Создание сайтов");
        $this->createSubCategory($categoryId, "Доработка сайта");
        $this->createSubCategory($categoryId, "Создание целевой страницы");
        $this->createSubCategory($categoryId, "Продвижение сайтов");
		$this->createSubCategory($categoryId, "Верстка сайта");

		// Создание категорий (14)
        $categoryId = $this->createCategory("Бюро переводов");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Письменные переводы");
        $this->createSubCategory($categoryId, "Редактура перевода");
        $this->createSubCategory($categoryId, "Перевод документов и нотариальное заверение");
        $this->createSubCategory($categoryId, "Устные переводы");
		$this->createSubCategory($categoryId, "Технический перевод");

		// Создание категорий (15)
        $categoryId = $this->createCategory("Реклама в Интернете");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Реклама в социальных сетях");
        $this->createSubCategory($categoryId, "Размещение объявлений");
        $this->createSubCategory($categoryId, "Настройка контекстной рекламы");
        $this->createSubCategory($categoryId, "SEO оптимизация сайта");
		$this->createSubCategory($categoryId, "Размещение постов на форумах");

		// Создание категорий (16)
        $categoryId = $this->createCategory("Фото- и видео- услуги");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Фотограф");
        $this->createSubCategory($categoryId, "Видеооператор");
        $this->createSubCategory($categoryId, "Обработка фотографий");
        $this->createSubCategory($categoryId, "Монтаж видео");
		$this->createSubCategory($categoryId, "Оцифровка видеокассет");

		// Создание категорий (17)
        $categoryId = $this->createCategory("Организация праздников");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Услуги ведущего");
        $this->createSubCategory($categoryId, "Музыкальное сопровождение");
        $this->createSubCategory($categoryId, "Услуги аниматоров");
        $this->createSubCategory($categoryId, "Организация питания");
		$this->createSubCategory($categoryId, "Выпечка и десерты");

		// Создание категорий (18)
        $categoryId = $this->createCategory("Деловые услуги");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Бухгалтерские услуги");
        $this->createSubCategory($categoryId, "Юридические услуги");
        $this->createSubCategory($categoryId, "Риэлтор");
        $this->createSubCategory($categoryId, "Услуги колл-центра");
		$this->createSubCategory($categoryId, "Финансовые услуги");

		// Создание категорий (19)
        $categoryId = $this->createCategory("Услуги репетиторов");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Преподаватели по предметам");
        $this->createSubCategory($categoryId, "Репетиторы иностранных языков");
        $this->createSubCategory($categoryId, "Написание работ");
        $this->createSubCategory($categoryId, "Преподаватели музыки");
		$this->createSubCategory($categoryId, "Автоинструкторы");

		// Создание категорий (20)
        $categoryId = $this->createCategory("Услуги красоты и здоровья");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Массаж");
        $this->createSubCategory($categoryId, "Уход за ногтями");
        $this->createSubCategory($categoryId, "Косметология");
        $this->createSubCategory($categoryId, "Уход за ресницами");
		$this->createSubCategory($categoryId, "Уход за бровями");

		// Создание категорий (21)
        $categoryId = $this->createCategory("Ремонт авто");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Помощь в дороге");
        $this->createSubCategory($categoryId, "Техническое обслуживание и диагностика");
        $this->createSubCategory($categoryId, "Автоэлектрика");
        $this->createSubCategory($categoryId, "Кузовные работы");
		$this->createSubCategory($categoryId, "Двигатель");

		// Создание категорий (22)
        $categoryId = $this->createCategory("Услуги для животных");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Уход за котами");
        $this->createSubCategory($categoryId, "Уход за собаками");
        $this->createSubCategory($categoryId, "Гостиница для животных");
        $this->createSubCategory($categoryId, "Перевозка животных");
		$this->createSubCategory($categoryId, "Уход за рыбками");

		// Создание категорий (23)
        $categoryId = $this->createCategory("Услуги тренеров");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Йога и фитнес");
        $this->createSubCategory($categoryId, "Игровые виды спорта");
        $this->createSubCategory($categoryId, "Водные виды спорта");
        $this->createSubCategory($categoryId, "Силовые виды спорта");
		$this->createSubCategory($categoryId, "Боевые искусства");

		// Создание категорий (23)
        $categoryId = $this->createCategory("Другие категории");
        // Создание подкатегорий
        $this->createSubCategory($categoryId, "Дом");
        $this->createSubCategory($categoryId, "Доставка");
        $this->createSubCategory($categoryId, "Фриланс");
        $this->createSubCategory($categoryId, "Преподавание");
		$this->createSubCategory($categoryId, "Бизнес");
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
