<?php namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class SpawnObserverCommand extends GeneratorCommand {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'spawn:observer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Observer class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Spawn';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return base_path().'/resources/stubs/observer.stub';
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        return base_path().'/app/Observers/'.$name.'Observer.php';
    }

    /**
     * Parse the name and format according to the root namespace.
     *
     * @param  string  $name
     * @return string
     */
    protected function parseName($name)
    {
        return $name;
    }


}
