<?php

declare(strict_types=1);

namespace App\Components\Stuffer;

use Nette\Application\UI\Control;

final class Stuffer extends Control
{

	/**
	 * @var float
	 * @persistent
	 */
	public $foo = 1;


	public function render(): void
	{
		$this->getTemplate()->foo = $this->foo;

		$this->getTemplate()->setFile(__DIR__ . '/templates/Stuffer.latte');
		$this->getTemplate()->render();
	}


	public function handlePlusOne(): void
	{
		$this->foo++;

		$this->redrawControl();
	}


	public function handleMinusOne(): void
	{
		$this->foo--;

		$this->redrawControl();
	}


	public function handleTimesTwo(): void
	{
		$this->foo *= 2;

		$this->redrawControl();
	}
}
