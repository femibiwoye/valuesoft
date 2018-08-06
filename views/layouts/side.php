<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 04/08/2018
 * Time: 10:46 AM
 */
use yii\helpers\Url;
?>


<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="<?=Yii::$app->homeUrl?>">
            <img src="<?=Url::to('@web/images/logo.png')?>" alt="ValueSoft" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="chart.html">
                        <i class="fas fa-search"></i>New Search</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-list"></i>Search History</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
