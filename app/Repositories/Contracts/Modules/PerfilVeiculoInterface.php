<?php

namespace App\Repositories\Contracts\Modules;

use Illuminate\Support\Collection;

interface PerfilVeiculoInterface
{

    public function getVeiculos(int $user_id, callable $filters): Collection;

}