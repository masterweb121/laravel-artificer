<?php


namespace Mascame\Artificer;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class PublishCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'artificer:publish';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Publish assets and config.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$package = 'mascame/artificer';

		if (file_exists(base_path() . '/workbench/mascame/artificer/')) {
			$this->call('config:publish', array('--path' => "workbench/mascame/artificer/src/config", 'package' => $package));
			$this->call('asset:publish', array('--bench' => $package));
		} else {
			$this->call('config:publish', array('package' => $package));
			$this->call('asset:publish', array('package' => $package));
		}

		$this->info("Done.");
	}


	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(//			array('example', InputArgument::REQUIRED, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL,
				'An example option.', null)
		);
	}
}

?>