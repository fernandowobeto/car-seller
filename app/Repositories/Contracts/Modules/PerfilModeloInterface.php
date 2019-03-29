<?php

namespace App\Repositories\Contracts\Modules;

use Illuminate\Support\Collection;

interface PerfilModeloInterface
{

   public function getModelos(): Collection;

}