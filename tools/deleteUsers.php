<?php

require(dirname(__FILE__) . '/bootstrap.inc.php');

class UserDeletionTool extends CommandLineTool {
  	/**
	 * Constructor.
	 * @param $argv array command-line arguments
	 */
	function __construct($argv = array()) {
		parent::__construct($argv);

		if (!sizeof($this->argv)) {
			$this->usage();
			exit(1);
		}

		$this->parameters = $this->argv;
	}

	/**
	 * Print command usage information.
	 */
	function usage() {
		echo "Permanently removes user(s) and associated information.  USE WITH CARE.\n"
			. "Usage: {$this->scriptName} username [...]\n";
	}

	/**
	 * Delete user data
	 */
	function execute() {
		$userDao = DAORegistry::getDAO('UserDAO');
		foreach($this->parameters as $username) {
			$user = $userDao->getByUsername($username);
			if(!isset($user)) {
				printf("Error: Skipping $username. Unknown username.\n");
				continue;
			}
			echo "Deleting $username (Id: " . $user->getId() . ")\n";
			$userDao->deleteUserById($user->getId());
		}
	}
};

$tool = new UserDeletionTool(isset($argv) ? $argv : array());
$tool->execute();
?>