<?php

declare(strict_types=1);

namespace App\Components\Stuffer;

interface IStufferFactory
{

	public function create(): Stuffer;
}
