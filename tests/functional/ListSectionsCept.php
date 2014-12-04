<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('List sections');

// When
$sections = $I->haveListSections();
//dd($sections->toArray());
// And
$I->amOnPage('CPanel/admin/sections');
// Then
$I->see('Sections','h1');
$I->see('There are 10 sections');

$I->see($sections->first()->name,'tbody tr:first-child td.name');
$I->see($sections->last()->name,'tbody tr:last-child td.name');


// When
$I->click('Show','tbody tr:first-child');
// Then
$I->expectTo('See the Section details');
//$I->seeCurrentUrlEquals('/CPanel/admin/sections/'.$sections->first()->id());
//$I->seeCurrentUrlEquals('/CPanel/admin/sections/'.$id);
$I->see($sections->first()->name,'h1');