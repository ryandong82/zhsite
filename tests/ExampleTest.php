<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Http\Controllers\IndexController;
use App\ArticleCategory;
use App\Article;
class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        //$this->visit('/')
//        $foreignKey = $foreignKey ?: $this->getForeignKey();
//
//        $instance = new $related;
//
//        $localKey = $localKey ?: $this->getKeyName();
//
//
//        return new HasMany($instance->newQuery(), $this, $instance->getTable().'.'.$foreignKey, $localKey);
        //     ->see('categories');

        $obj = ArticleCategory::find(1);
        //->getForeignKey();
        $foreignKey = $obj->getForeignKey();
        $localKey = $obj->getKeyName();
        $instance = new App\Article;
        //$ob = HasMany($instance->newQuery(), $this, $instance->getTable().'.'.$foreignKey, $localKey)
        $result = new HasMany($instance->newQuery(), $obj, $instance->getTable().'.'.'category', $localKey);
        echo $result->getResults();
        //echo get_class($instance->newQuery(), $obj, $isttance->);

    }

    public function testController()
    {
        echo "\n-----------------------------------\n";

        $obj = Article::all();
        echo $obj->find(1)->category()->getResults()['category_name'];
//        $arr = array();
//        $cateFields = array();
//        foreach ($obj as $o)
//        {
//            $cateFields = $o;
//            $artlFields['allArticles'] = $o->articles()->getResults();
//            //$o->categories()->getResults();
//            echo $o->articles()->getResults() . "\n";
//            array_push($arr, $cateFields['arrArticles']);
//        }
//        echo json_encode($arr);
        echo "\n-----------------------------------\n";
        //echo get_class($obj);


    }

}
