<?php

function site_root()
{
    return url('/' );
}

function current_user()
{
    return auth()->user();
}

function api_prod()
{
    return false;
}

function api_dev()
{
    return !api_prod();
}

function api_base()
{
    return api_prod()? config('ark.api_base.prod') : config('ark.api_base.prod');
}
