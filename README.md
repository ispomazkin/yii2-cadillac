yii2-cadillac
=================



Установка
------------------
* Установка пакета с помощью Composer
```
composer require ispomazkin/yii2-chevrolet_america
```


В конфигурации common/config/main-local.php добавить параметры. 

    'modules' => [
        'chevrolet_america'=>[
            'class'=>'\ispomazkin\chevrolet_america\Module',
            'host'=>'http://149.154.64.192',
            'image_path'=>'/img/img_chevrolet_a',
            'search_pattern'=>'https://zp24.shop/search/?article={article}&brand=chevrolet',
        ],
    ],

Строка поиска может быть любая, вместо паттерна {article} будет подставляться артикул.
После установки и настройки каталог будет доступен по адресу /chevrolet

Чтобы задать собственные шаблон генерации title, keywords, description,
используются предустановленные шаблоны переменные {model},{year},{group},{parts} 

        'chevrolet'=>[
            'class'=>'\ispomazkin\chevrolet_america\Module',
            'host'=>'http://149.154.64.192',
            'image_path'=>'/img/img_chevrolet_a',
            'search_pattern'=>'https://zp24.shop/search/?article={article}&brand=chevrolet',
            'base_url'=>'/chevrolet-america',
            'titlePattern=>[
                    'years'=>'Запчасти Шевроле Америка',
                    'categories'=>'{model} {year}',
                    'groups'=>'{category}',
                    'parts'=>'{parts}'
            ],
            'descriptionPattern'=>[
                'years'=>'Каталог запчастей Шевроле Америка',
                'categories'=>'Каталог запчастей Шевроле Америка {model} {year}',
                'groups'=>'Каталог запчастей Шевроле Америка {model} {year} по категории {category}',
                'parts'=>'Каталог запчастей Шевроле Америка {model} {year} {category} {group} {parts}'
            ],
            'keywordsPattern'=>[
                'years'=>'EPC chevrolet America',
                'categories'=>'{model} {year}',
                'groups'=>'{model} {year} ',
                'parts'=>'{parts}'
            ],
        ],
        
