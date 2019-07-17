<?php

declare(strict_types=1);

namespace StdGroup\LaravelGenerator;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('install')
            ->setDescription('Install new Laravel app')
            ->addArgument(
                'name',
                InputArgument::REQUIRED,
                'Your project name'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');

        $output->writeln("Install new app: {$name}");

        $questionHelper = $this->getHelper('question');
        $question = new ChoiceQuestion(
            'Please select Laravel version (defaults: latest)',
            ['5.5', '5.6', '5.7', '5.8', 'latest'],
            4
        );
        $question->setErrorMessage('Invalid version. Please select again!');

        $laravelVersion = $questionHelper->ask($input, $output, $question);
        $output->writeln('Installing Laravel ' . $laravelVersion);

        $laravelPackage = 'laravel/laravel';
        if ($laravelVersion !== 'latest') {
            $laravelPackage .= ":$laravelVersion";
        }

        $process = new Process("composer create-project --prefer-dist $laravelPackage $name");
        $process->setTty(true);
        $process->setTimeout(null);

        $output->writeln('Run > $ ' . $process->getCommandLine());

        $statusCode = $process->run(function ($type, $buffer) use ($output) {
            $output->writeln($buffer);
        });

        if ($statusCode === 0) {
            $output->writeln('All done!');
        }
    }
}
