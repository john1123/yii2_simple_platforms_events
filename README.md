# yii2_simple_platforms_events

Реализовать с помощью Yii2 мини-сайт с афишей событий (фронтэнд с помощью bootstrap реализовать).

Разделы.
1. Административный - авторизация по логину паролю. Необходим для наполнения БД данными (о данных и их структуре будет описано далее).
2. Публичный - состоит из 3 страниц:
    - Главная страница со списком ближайших событий (с постраничной навигацией) (внешний вид вот такой - https://blackrockdigital.github.io/startbootstrap-3-col-portfolio/,http://joxi.ru/RmzgOXKU0XOBw2.png)
    - Страница со списком площадок (внешний вид вот такой - https://blackrockdigital.github.io/startbootstrap-heroic-features/ (без верхнего блока http://joxi.ru/xAeelGNspJlN6A.png, http://joxi.ru/5mdWpkNtk46w7r.png).
    - На странице площадки отображаются события данной площадки (верх - http://joxi.ru/l2ZV8vnswDeoW2.png, ниже список событий как на главной).

Данные.
Площадка:
    Поля - название, картинка, описание, сортировка (нужно для управления порядком вывода площадок в публичной части сайта)

Шоу:
    Поля - название, картинка, описание.

События:
    Поля - дата, шоу, площадка.

Указанный перечень полей является минимальным и может быть дополнен при необходимости.
