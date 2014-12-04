<?php
namespace Codeception\Module;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Collection;
use Section;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{
  public function haveSection(){

      $section = \App::make('cms\Section\SectionRepoInterface')->create([
          'name'=>'Our company',
          'slug_url'=>'our-company',
          'menu'=>'1',
          'menu_order'=>'2',
          'type'=>'page',
          'published'=>'0'
      ]);
      return $section ->id;
      /*return $this->getModule('Laravel4')->haveRecord('sections',[
          'name'=>'Our company',
          'slug_url'=>'our-company',
          'menu'=>'1',
          'menu_order'=>'2',
          'type'=>'page',
          'published'=>'0'
      ]);*/
  }

  public function haveListSections($num=10){
      return \App::make('SectionSeeder')->haveListSections($num);
  }

}
