<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('Filter sections');
// When
$I->haveSection(); // Created "Our company" Section
$sections = $I->haveListSections();
// And
$I->amOnPage('CPanel/admin/sections');
// Then
$I->seeElement('input',['name'=>'search']);
// When
$I->selectOption('type','gallery');
$I->selectOption('published','1');
$I->selectOption('menu','0');
$I->fillField('search','company');


$I->click('Filter sections');
$I->seeCurrentUrlEquals('/CPanel/admin/sections?type=gallery&published=1&menu=0&search=company');
$I->expect('not to see our company record');
$I->dontSee('Our company','td.name');
$I->seeInField('search','company');
// When
$I->selectOption('type','page');
$I->selectOption('published','0');
$I->selectOption('menu','1');
$I->click('Filter sections');
// Then
$I->See('Our company','td.name');
$I->dontSee($sections->first()->name,'td.name');
$I->dontSee($sections->last()->name,'td.name');


