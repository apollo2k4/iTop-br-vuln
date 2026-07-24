<?php

/**
 * @copyright   Copyright (C) 2021 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-09-02
 *
 * Localized data
 */

Dict::Add('RU RU', 'Russian', 'Русский', array(
    // Dictionary entries go here

    'Class:IPAddress/Attribute:vulnscan_assetid' => 'Идентификатор актива для сканирования',
    'Class:IPAddress/Attribute:vulnscan_assetid+' => 'Идентификатор актива в сканере уязвимостей',

    'Class:IPAddress/Attribute:last_vulnscan_date' => 'Время последнего сканирования',
    'Class:IPAddress/Attribute:last_vulnscan_date+' => 'Дата последнего сканирования IP',

    'Class:IPAddress/Attribute:fqdn_from_vulnscan' => 'FQDN для сканирования',
    'Class:IPAddress/Attribute:fqdn_from_vulnscan+' => '',

    'Class:IPAddress/Attribute:cvss_score' => 'CVSS значение',
    'Class:IPAddress/Attribute:cvss_score+' => '',
    'Class:IPAddress/Attribute:highvuln_count' => 'Высокий #',
    'Class:IPAddress/Attribute:highvuln_count+' => 'Высокий риск (кол-во)',
    'Class:IPAddress/Attribute:mediumvuln_count' => 'Средний #',
    'Class:IPAddress/Attribute:mediumvuln_count+' => 'Средний риск (кол-во)',
    'Class:IPAddress/Attribute:lowvuln_count' => 'Низкий #',
    'Class:IPAddress/Attribute:lowvuln_count+' => 'Низкий риск (кол-во)',
    'Class:IPAddress/Attribute:logvuln_count' => 'Журнал #',
    'Class:IPAddress/Attribute:logvuln_count+' => 'Записей в журнале',
    'Class:IPAddress/Attribute:cpe_os' => 'CPE OS',
    'Class:IPAddress/Attribute:cpe_os+' => 'Идентификатор CPE (Common Platform Enumeration) ОС',
    'Class:IPAddress:vulnscaninfo' => 'Информация об уязвимостях',
));
