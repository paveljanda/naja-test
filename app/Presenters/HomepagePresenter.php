<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Components\Stuffer\IStufferFactory;
use App\Components\Stuffer\Stuffer;
use Dibi\Connection;
use Nette\Application\UI\Presenter;
use Ublaboo\DataGrid\DataGrid;

final class HomepagePresenter extends Presenter
{

	/**
	 * @var IStufferFactory
	 * @inject
	 */
	public $stufferFactory;

	/**
	 * @var Connection
	 * @inject
	 */
	public $dibiConnection;


	public function createComponentCalculator(): Stuffer
	{
		return $this->stufferFactory->create();
	}


	public function createComponentGrid(): DataGrid
	{
		$grid = new DataGrid;

		$grid->setDataSource($this->dibiConnection->select('*')->from('user'));

		$grid->addColumnText('id', '#');

		return $grid;
	}
}
