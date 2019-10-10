<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Components\Stuffer\IStufferFactory;
use App\Components\Stuffer\Stuffer;
use Nette\Application\UI\Presenter;

final class HomepagePresenter extends Presenter
{

	/**
	 * @var IStufferFactory
	 * @inject
	 */
	public $stufferFactory;


	public function createComponentCalculator(): Stuffer
	{
		return $this->stufferFactory->create();
	}
}
