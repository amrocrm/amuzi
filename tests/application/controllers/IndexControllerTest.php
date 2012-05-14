<?php

require_once 'bootstrap.php';

class IndexControllerTest extends AbstractControllerTest
{
    public function __construct()
    {
        $this->_databaseUsage = true;
    }

    public function testSanity()
    {
        $this->assertTrue(true);
    }

    public function testLoginFormAction()
    {
        $this->dispatch('/');
        $this->assertLoginForm();
    }

    public function testIndexAction()
    {
        $this->testLogin();
        $this->dispatch('/');
        $this->assertBasics('index', 'index');
        $this->assertQuery('form#search');
        $this->assertQuery('form#search input#q');
        $this->assertQuery('form#search input#submit');
        $this->assertQuery('div#jp_container_1');
        $this->assertQuery('div#result');
        $this->assertQuery('div#result');
        $this->assertQuery('div.navbar');
        $this->assertQuery('div.ribbon');
    }

    public function testAboutAction()
    {
        $this->assertAjaxWorks('/index/about');
        $this->assertBasics('about', 'index');
    }
}
