<?php
namespace CakeElements\Shell;

use Cake\Console\Shell;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

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
    }

    public function heyThere($name = 'Anonymous')
    {
        $this->out('Hey there ' . $name);
    }
    
    public function install($name)
    {
        $address = explode('/',$name);
        
        $user = $address[0];
        $repo = $address[1];
        
        $elementDir = new Folder(APP.DS.'Template'.DS.'Element', true, 0755);
        
        $userDir = new Folder(APP.DS.'Template'.DS.'Element'.DS.$user, true, 0755);
        
        $repoDir = new Folder(APP.DS.'Template'.DS.'Element'.DS.$user.DS.$repo.DS, true, 0755);
        

        $client = new \Github\Client();
        $contents = $client->api('repo')->contents()->show($user,$repo);
        foreach($contents as $content){
            $file = file_get_contents($content['download_url']);
            $this->createFile(APP.DS.'Layout'.DS.'Element'.DS.$user.DS.$repo.DS.$content['name'],$file);
        }
    }
}
