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

## ���������� html/css � Drupal CMS

* C��������� ������ ����������� �������� html ���� � ����
* � ��������� ����� ������ �������� css/admin.css (����� **roundfollio.info**)
* �������� ���� templates/html.tpl.php (���������� �������� ����� ������� � drupal)
* �������� javascript: js/jquery.nivo.slider.pack.js (����� roundfollio.info)
* �������� � drupal.js � jquery.nivo.slider.pack.js ������� ����� ������������� **jQuery.noConflict()**
* ���������� html/css ������� ���������� � �������������� ��������� Views
* ������� �������� ����������������� **http://localhost/workspace**
* ��� �������� �������� ����������������� �������������� ���������� **Admin Views + Views Bulk Operations**
* �����, ��� �������� �������� ����������������� ������������� ������ **Empty Page**
* ��� ������ ����� views ������������� �.�. **rewrite the output + replacement patterns**
* ������������� ������ **Image URL Formatter** (������������ Image URL � content types)
* ��� **���������������** ���������� ������ views **html ����**, ������������� ������ **Semantic Views**
* ������� content type ��������� **���� order**, ��� ������ ����������� � ����������� �������
* � ��������� ������������� **block-[region].tpl.php** (region ������ � roundfollio.info)
* � ��������� ������������ **block--system--main.tpl.php � block--user--login.tpl.php**
* � ��������� ������������ ����� **views-view--[name].tpl.php � semanticviews-view-[name].tpl.php**
* ��� ������������ html/css ������������ ��������� ���� **theme_webform_email, theme_textarea, theme_form_alter**

