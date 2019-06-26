<?php

namespace ispomazkin\chevrolet_america;

use yii\base\Module as BaseModule;



class Module extends BaseModule
{
    /**
     * @var string
     * Хост для обращениий к АПИ и Картинкам
     */
    public $host;

    /**
     * @var string
     * Адрес папки с картинками на хосте
     */
    public $image_path;

    /**
     * @var string
     * поисковый шаблон
     */
    public $search_pattern;

    /**
     * @var string
     * Базовый путь к каталогу
     */
    public $base_url='/chevrolet-america';


    /**
     * @var array
     * Паттерн для вывода различного типа title на страницах
     * Доступны шаблоны
     * {model},{category},{group},{last}
     */
    public $titlePattern=[
        'years'=>'Запчасти Шевроле Америка',
        'categories'=>'{model} {year}',
        'groups'=>'{category}',
        'parts'=>'{parts}'
    ];

    /**
     * @var array
     * Паттерн для вывода различного типа keywords на страницах
     * Доступны шаблоны
     * {model},{category},{group},{last}
     */
    public $kwdsPattern=[
        'years'=>'EPC chevrolet America',
        'categories'=>'{model} {year}',
        'groups'=>'{model} {year} ',
        'parts'=>'{parts}'
    ];


    /**
     * @var array
     * Паттерн для вывода различного типа description на страницах
     * Доступны шаблоны
     * {model},{category},{group},{last}
     */
    public $descriptionPattern=[
        'years'=>'Каталог запчастей Шевроле Америка',
        'categories'=>'Каталог запчастей Шевроле Америка {model} {year}',
        'groups'=>'Каталог запчастей Шевроле Америка {model} {year} по категории {category}',
        'parts'=>'Каталог запчастей Шевроле Америка {model} {year} {category} {group} {parts}'

    ];




    public $controllerNamespace = 'ispomazkin\chevrolet_america\controllers';

}
