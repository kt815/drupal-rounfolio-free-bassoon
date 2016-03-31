![slide] (http://res.cloudinary.com/comm1t/image/upload/v1451875263/2016-01-04_10-40-32_wuhlah.png "Slide")

# Html/css template to Drupal CMS
http://kt815.esy.es/roundfolio
(shorten url http://goo.gl/pI0lY7)

## Source: Piatto A Free Flat Style Landing Page PSD
https://vimeo.com/29642088

## Installation:

1. git clone https://kt815@bitbucket.org/kt815/drupal-rounfolio.git
2. Create database: drupal_rounfolio
3. Unzip into drupal_rounfolio: drupal-rounfolio/sites/all/themes/roundfollio/database_drupal_rounfolio.sql.zip
4. Login to: htp://localhost/workspace (name: noname, pass: 1)

## Интеграция html/css в Drupal CMS

* Cоциальные иконки реализованы вставкой html кода в блок
* К основному файлу стилей добавлен css/admin.css (через **roundfollio.info**)
* Добавлен файл templates/html.tpl.php (интеграция базового стиля шаблона с drupal)
* Добавлен javascript: js/jquery.nivo.slider.pack.js (через roundfollio.info)
* Конфликт с drupal.js и jquery.nivo.slider.pack.js решился через использование **jQuery.noConflict()**
* Интеграция html/css шаблона происходит с использованием темизации Views
* Создана страница администрирования **http://localhost/workspace**
* Для создания страницы администрирования использовалась комбинация **Admin Views + Views Bulk Operations**
* Также, для создания страницы администрирования используюется модуль **Empty Page**
* При выводе через views использовался т.н. **rewrite the output + replacement patterns**
* Использование модуля **Image URL Formatter** (формирование Image URL в content types)
* Для **переопределения** выводимого друпал views **html кода**, использовался модуль **Semantic Views**
* Каждому content type добавлено **поле order**, для вывода содержимого в определённом порядке
* В темизации использовался **block-[region].tpl.php** (region указан в roundfollio.info)
* В темизации используются **block--system--main.tpl.php и block--user--login.tpl.php**
* В темизации используются файлы **views-view--[name].tpl.php и semanticviews-view-[name].tpl.php**
* Для кастомизации html/css используются следующие хуки **theme_webform_email, theme_textarea, theme_form_alter**

