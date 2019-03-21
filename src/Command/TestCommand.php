<?php

namespace App\Command;

use App\Client\GoogleClient;
use App\Service\SomeService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class TestCommand extends Command
{
    protected static $defaultName = 'app:test-command';

    private $someService;

    private $googleClient;

    public function __construct(SomeService $someService, GoogleClient $googleClient)
    {
        parent::__construct(self::$defaultName);

        $this->someService = $someService;
        $this->googleClient = $googleClient;
    }

    protected function configure()
    {
        $this->setDescription('Add a short description for your command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $parameterValue = $this->someService->getParameter('someParameter');

        $io->success('Your \'someParameter\' value is: ' . $parameterValue);

        $response = $this->googleClient->search($parameterValue);

        $io->success($response->getBody()->getContents());
    }
}
