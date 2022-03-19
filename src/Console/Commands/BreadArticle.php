<?php

namespace Joy\VoyagerBreadArticle\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class BreadArticle extends Command
{
    protected $name = 'joy-bread-article';

    protected $description = 'Joy VoyagerBreadArticle';

    public function handle()
    {
        $this->output->title('Starting bread-article');

        // Your magic here

        $this->output->success('BreadArticle successful');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['arguement1', InputArgument::REQUIRED, 'The argument1 description'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            [
                'option1',
                'o',
                InputOption::VALUE_OPTIONAL,
                'The option1 description',
                config('joy-voyager-bread-article.option1')
            ],
        ];
    }
}
