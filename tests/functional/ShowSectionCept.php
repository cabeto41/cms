<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('See Section details');

// When
$id = $I->haveSection();
$I->amOnPage('CPanel/admin/sections/'.$id);

//Then
$I->seeCurrentUrlEquals('/CPanel/admin/sections/'.$id);

$I->expectTo('See the Section detail');
$I->see('Our Company','h1');
$I->see('our-company','.slug-url');
$I->see('Show in menu','.menu');
$I->see('2','.menu-order');
$I->see('Draft','.published');
