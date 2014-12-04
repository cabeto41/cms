<?php

use Cms\Section\SectionRepoInterface;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Collection;

class SectionSeeder extends Seeder{

    private $sectionRepo;

    public function __construct(SectionRepoInterface $sectionRepo){
        $this->sectionRepo = $sectionRepo;
    }

    public function  run(){
        $this->haveListSections(50);
    }

    public function haveListSections($num=10){
        $faker = Faker::create();
        $sections = new Collection();
        for ($i = 0; $i < $num; $i++){
            $name = $faker->unique()->sentence(2);
            $sections->add(
                $this->sectionRepo->create([
                    'name'=>$name,
                    'slug_url'=>\Str::slug($name),
                    'menu'=>rand(0,1),
                    'menu_order'=>rand(1,10),
                    'type'=>$faker->randomElement(['page','blog','gallery']),
                    'published'=>rand(0,1)
                ]));
        }
        return $sections;
    }

} 