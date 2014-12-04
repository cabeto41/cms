<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('create a new Section');

//When
$I->amOnPage('CPanel/admin/sections');
//And
$I->click('Add a new Section');
// Then
$I->seeCurrentUrlEquals('/CPanel/admin/sections/create');
$I->see('New Section','h1');

$I->amGoingTo('omit the name field in order to submit an invalid form');
// When
$I->fillField('Slug URL','our-company');
$I->click('Create Section');
// Then
$I->expectTo('See the form with the errors');
$I->seeCurrentUrlEquals('/CPanel/admin/sections/create');
$I->seeInField('slug_url','our-company');
$I->see('The name field is required','.error');

$I->amGoingTo('Fill a valid form');
//When
$I->fillField('Name','Our Company');
$I->fillField('Slug URL','our-company');
$I->selectOption('type','blog');
$I->selectOption('menu','1');
$I->fillField('menu_order','2');
$I->selectOption('published','0');

// And
$I->click('Create Section');

//Then
$I->seeCurrentUrlEquals('/CPanel/admin/sections/1');
$I->see('Our Company','h1');
$I->seeRecord('sections',[
            'name'=>'Our Company',
            'menu'=>'1',
            'menu_order'=>'2',
            'published'=>'0',
    ]);

//alter table sections auto_increment=1

