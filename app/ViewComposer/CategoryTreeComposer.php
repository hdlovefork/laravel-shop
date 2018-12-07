<?php
/**
 * Created by PhpStorm.
 * User: Dean
 * Email: 1602264241@qq.com
 * Date: 2018-12-07
 * Time: 10:21
 */

namespace App\ViewComposer;


use App\Services\CategoryService;
use Illuminate\View\View;

class CategoryTreeComposer
{
    /**
     * @var CategoryService
     */
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function compose(View $view){
        // 使用 with 方法注入变量
        $view->with('categoryTree', $this->categoryService->getCategoryTree());
    }
}