<?php
namespace cms\Section;

use cms\Base\BaseRepo;

class SectionRepo extends BaseRepo implements SectionRepoInterface
{

    public function  getModel(){
        return new Section();
    }

    public $filters = ['type','published','menu','search'];

    public function filterBySearch($q,$value){
        $q->where('name','LIKE',"%$value%");
    }
}