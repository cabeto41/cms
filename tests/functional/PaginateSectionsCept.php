<?php 
$I = new FunctionalTester($scenario);
$I -> am('c CMS admin');
$I->wantTo('paginate sections results');

$I->amGoingTo('Go to page 1');

// When
$sections = $I->haveListSections(16);
$I->amOnPage('CPanel/admin/sections');
// Then
$I->see('There are 16 sections, showing page 1 of 2');
$I->expectTo('see the first Section');
$I->see ($sections->first()->name,'tbody tr:first-child td.name');

$I->expectTo('not see the last Section');
$I->dontSee($sections->last()->name,'tbody tr:last-child td.name');
$I->expectTo('see the page 2 link');
$I->see ('2','.pagination a');

$I->amGoingTo('go to page 2');
// When
$I->click('2','.pagination a');
// Then
$I->expectTo('see the pagination parameter in the URL');
$I->seeCurrentUrlEquals('/CPanel/admin/sections?page=2');
$I->expectTo('not to see the first Section');
$I->dontSee($sections->first()->name,'tbody tr:first-child td.name');
$I->expectTo('see the last Section');
$I->See($sections->last()->name);
$I->expectTo('See the sections #15 as firts item on page 2');
$I->see($sections->get(15)->name,'tbody tr:first-child td.name');

$I->amGoingTo('go back to page 1');
// When
$I->amOnPage('/CPanel/admin/sections?page=2');
$I->see('1','.pagination a');
// And
$I->click('1','.pagination a');
// Then
$I->seeCurrentUrlEquals('/CPanel/admin/sections?page=1');