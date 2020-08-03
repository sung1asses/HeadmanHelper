<?php

namespace App\Providers;
use App\Models\Post;
use App\Models\Test;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['messages.fields'], function ($view) {
            $postItems = Post::pluck('title','id')->toArray();
            $view->with('postItems', $postItems);
        });
        View::composer(['messages.fields'], function ($view) {
            $postItems = Post::pluck('title','id')->toArray();
            $view->with('postItems', $postItems);
        });
        View::composer(['messages.fields'], function ($view) {
            $postItems = Post::pluck('title','id')->toArray();
            $view->with('postItems', $postItems);
        });
        View::composer(['messages.fields'], function ($view) {
            $postItems = Post::pluck('title','id')->toArray();
            $view->with('postItems', $postItems);
        });
        View::composer(['messages.fields'], function ($view) {
            $postItems = Post::pluck('title','id')->toArray();
            $view->with('postItems', $postItems);
        });
        View::composer(['messages.fields'], function ($view) {
            $postItems = Post::pluck('title','id')->toArray();
            $view->with('postItems', $postItems);
        });
        View::composer(['messages.fields'], function ($view) {
            $postItems = Post::pluck('title','id')->toArray();
            $view->with('postItems', $postItems);
        });
        View::composer(['questions.fields'], function ($view) {
            $testItems = Test::pluck('title','id')->toArray();
            $view->with('testItems', $testItems);
        });
        //
    }
}