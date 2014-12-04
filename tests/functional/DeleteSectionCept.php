<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('Delete a Section');

// When
$id = $I->haveSection();
// And
$I->amOnPage('CPanel/admin/sections/' . $id);
// Then
$I->see('Delete Section','.btn-del');

// When
$I->click('Delete Section');
// Then
$I->seeCurrentUrlEquals('/CPanel/admin/sections');
$I->dontSeeRecord('sections',[
    'id'=>$id
]);
