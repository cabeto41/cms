<?php

namespace cms\Section;

use cms\Base\BaseEntity;

interface SectionRepoInterface
{
    public function create(array $data);

    public function findOrFail($id);

    public function delete(BaseEntity $entity);

    public function search(array $data = array(),$orderField,$orderDirection, $paginate = false);

    public function update(BaseEntity $entity, array $data);
}