<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS Admin');
$I->wantTo('Update a Section');

// When
$id = $I->haveSection();
//And
$I->amOnPage('CPanel/admin/sections/'.$id);
//Then
$I->see('Edit Section','.btn-edit');

// When
$I->click('Edit Section');
// Then
$I->seeCurrentUrlEquals('/CPanel/admin/sections/'.$id.'/edit');
$I->see('Edit Section "Our Company"','h1');
$I->seeInField('name','Our company');
$I->seeInField('slug_url','our-company');
$I->seeOptionIsSelected('menu','Yes');
$I->seeinfield('menu_order','2');
$I->seeOptionIsSelected('type','Page');
$I->seeOptionIsSelected('published','Draft');

$I->amGoingTo('Submit an invalid form');
//When
$I->fillField('name','');
// And
$I->click('Update Section');
// Then
$I->expectTo('see the form back with data and error');
$I->seeCurrentUrlEquals('/CPanel/admin/sections/'.$id.'/edit');
$I->seeInField('name','');
$I->see('The name field is required','.error');
$I->seeInField('slug_url','our-company');

$I->amGoingTo('Submit an valid form');
//When
$I->fillField('name','Who we are');
$I->selectOption('published',1);
// And
$I->click('Update Section');
// Then
$I->expectTo('see the Section details the new changes');
$I->seeCurrentUrlEquals('/CPanel/admin/sections/'.$id);
$I->see('Who we are','h1');
$I->seeRecord('sections',[
    'name'=>'Who we are',
    'menu'=>'1',
    'menu_order'=>'2',
    'type'=>'page',
    'published'=>'1',
]);