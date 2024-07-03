<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>Главная страница</title>
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @vite('resources/css/styles.scss')
    <link rel="stylesheet" type="text/css" href="css/styles.min.css">
</head>
<body id="app">
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__content d-flex">
                @include('header.mobile-header')
                @include('header.desktop-header')
            </div>
        </div>
    </header>
