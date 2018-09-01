<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/1/18
 * Time: 5:54 AM
 */

namespace MyRetail;

/**
 * Class MyClass
 * @package MyRetail
 */
class MyClass
{

    /**
     * The title of my App
     *
     * @var string
     */
    private $title = "MyRetail";

    public function __construct()
    {

    }

    /**
     * Returns the title
     *
     * @return string
     */
    function getTitle()
    {
        return $this->title;
    }
}