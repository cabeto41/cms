<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('List empty');

$I->amGoingTo('check an empty sections list');
// When
$I->amOnPage('/CPanel/admin/sections');
// Then
$I->see('There are no sections');
