<?php
namespace CakeElements\Shell;

use Cake\Console\Shell;

/**
 * Elements shell command.
 */
class ElementsShell extends Shell
{

    /**
     * main() method.
     *
     * @return bool|int Success or error code.
     */
    public function main()
    {
        $this->out('Hello world.');
    }

    public function heyThere($name = 'Anonymous')
    {
        $this->out('Hey there ' . $name);
    }
}
