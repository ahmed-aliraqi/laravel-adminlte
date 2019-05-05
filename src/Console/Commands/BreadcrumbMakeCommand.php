<?php

namespace AhmedAliraqi\Adminlte\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\GeneratorCommand;

class BreadcrumbMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:breadcrumb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new breadcrumb file';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'breadcrumb';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/../Stubs/Breadcrumb.stub';
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        return str_replace(
            [
                'DummyBluralName',
                'DummySingularName',
            ],
            [
                $this->argument('name'),
                Str::singular($this->argument('name')),
            ],
            $stub
        );
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        $name = str_replace(
            ['\\', '/'], '', $this->argument('name')
        );

        return $this->laravel->basePath()."/routes/breadcrumbs/{$name}.php";
    }
}
