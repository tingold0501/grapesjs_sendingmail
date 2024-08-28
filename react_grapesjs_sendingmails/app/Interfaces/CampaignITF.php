<?php

namespace App\Interfaces;

interface CampaignITF
{
    public function create(array $data);
    public function update(int $id, array $data);
}
