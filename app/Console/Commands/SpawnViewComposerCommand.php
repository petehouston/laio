<?php namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class SpawnViewComposerCommand extends GeneratorCommand {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'spawn:view.composer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new ViewComposer class';

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
        return base_path().'/resources/stubs/viewcomposer.stub';
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        return base_path().'/app/Views/Composers/'.$name.'Composer.php';
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
