<?php

if (! function_exists('activeMainLink')) {
    function activeMainLink()
    {
        if (request()->is('/')) {
            return 'active';
        }
        return '';
    }
}

if (! function_exists('activeArticleLink')) {
    function activeArticleLink()
    {
        if (request()->is('articles') or request()->is('articles/*')) {
            return 'active';
        }
        return '';
    }
}
