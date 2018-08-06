<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 03/08/2018
 * Time: 9:48 PM
 */
use yii\helpers\Url;
?>

<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="<?=Yii::$app->homeUrl?>">
                    <img src="<?=Url::to('@web/images/logo.png')?>" alt="ValueSoft" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li>
                    <a href="chart.html">
                        <i class="fas fa-search"></i>New Search</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-list"></i>Search History</a>
                </li>
            </ul>
        </div>
    </nav>
</header>