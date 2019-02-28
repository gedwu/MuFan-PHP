<?php

function getNavigationItems() {
    return [

        [
            'url' => 'index.php?page=article_list',
            'page' => 'article_list',
            'title' => 'Naujienos'
        ],

        [
            'url' => 'index.php?page=blog_list',
            'page' => 'blog_list',
            'title' => 'Blogas'
        ],


        [
            'url' => 'index.php?page=table',
            'page' => 'table',
            'title' => 'Lentelės'
        ],

        [
            'url' => 'index.php?page=game_list',
            'page' => 'game_list',
            'title' => 'Mačai'
        ],

        [
            'url' => 'index.php?page=player_list',
            'page' => 'player_list',
            'title' => 'Žaidėjai'
        ],

    ];
}

function getAge($bdate) {
    return date_diff(date_create($bdate), date_create('now'))->y;
}

function getHomeTeamName($home, $opp) {
    if ($home) {
        return 'Manchester United';
    }

    return $opp;
}

function getAwayTeamName($home, $opp) {
    if (!$home) {
        return 'Manchester United';
    }

    return $opp;
}

function getCountryByKey($key) {
    $result = '';

    switch ($key) {
        case 'arg':
            $result = "Argentina";
            break;
        case 'arm':
            $result = "Armėnija";
            break;
        case 'bel':
            $result = 'Belgija';
            break;
        case 'dkk':
            $result = "Dramblio Kaulo Krantas";
            break;
        case 'ecu':
            $result = "Ekvadoras";
            break;
        case 'eng':
            $result = 'Anglija';
            break;
        case 'esp':
            $result = "Ispanija";
            break;
        case 'fra':
            $result = "Prancūzija";
            break;
        case 'ita':
            $result = 'Italija';
            break;
        case 'nld':
            $result = "Nyderlandai";
            break;
        case 'swe':
            $result = "Švedija";
            break;
    }

    return $result;
}

function getNationalityByKet($key) {
    $result = '';

    switch ($key) {
        case 'arg':
            $result = "Argentinietis";
            break;
        case 'arm':
            $result = "Armėnas";
            break;
        case 'bel':
            $result = 'Belgas';
            break;
        case 'dkk':
            $result = "Dramblio Kaulo Krantietis";
            break;
        case 'ecu':
            $result = "Ekvadorietis";
            break;
        case 'eng':
            $result = 'Anglas';
            break;
        case 'esp':
            $result = "Ispanas";
            break;
        case 'fra':
            $result = "Prancūzas";
            break;
        case 'ita':
            $result = 'Italas';
            break;
        case 'nld':
            $result = "Olandas";
            break;
        case 'swe':
            $result = "Švedas";
            break;
    }

    return $result;
}

function getDateLong($string) {
    $year = substr($string, 0, 4);
    $month = substr($string, 5, 2);
    $day = substr($string, 8, 2);

    switch ($month) {
        case "01":
            $month = 'Sausio';
            break;
        case "02":
            $month = 'Vasario';
            break;
        case "03":
            $month = 'Kovo';
            break;
        case "04":
            $month = 'Balandžio';
            break;
        case "05":
            $month = 'Gegužės';
            break;
        case "06":
            $month = 'Birželio';
            break;
        case "07":
            $month = 'Liepos';
            break;
        case "08":
            $month = 'Rugpjūčio';
            break;
        case "09":
            $month = 'Rugsėjo';
            break;
        case "10":
            $month = 'Spalio';
            break;
        case "11":
            $month = 'Lapkričio';
            break;
        case "12":
            $month = 'Gruodžio';
            break;
    }

    return $year.' '.$month.' '.$day;
}

function getDateShort($key) {
    return substr($key, 2);
}

function getLeagueByKey($key) {
    $result = "";
    switch ($key) {
        case "PRL":
            $result = "Premier Lyga";
            break;
        case "CL":
            $result = "Čempionų Lyga";
            break;
        case "EL":
            $result = "Europos Lyga";
            break;
        case "FAC":
            $result = "FA Taurė";
            break;
        case "LC":
            $result = "Anglijos taurė";
            break;
        case "ICC":
            $result = "ICC";
            break;
        case "CLF":
            $result = "Draugiškos";
            break;
    }

    return $result;
}