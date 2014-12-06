<?php

namespace Kwetal\Silex\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Doctrine\Common\DataFixtures\Loader;
use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\ORM\EntityManager;
use Kwetal\Silex\Fixtures\LoadUserData;

class DataFixturesCommand extends ContainerAwareCommand
{
    /**
     * @var Entitymanager $em
     */
    protected $em;

    protected function configure()
    {
        $this->setName('datafixtures:load')
            ->setDescription('Load fixtures')
            ->setHelp('Load fixtures into database');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $loader = new Loader();
        $loader->addFixture(new LoadUserData());

        $helper = $this->getHelper('question');
        $question = new ConfirmationQuestion('<fg=black;bg=yellow>This will purge your database. Continue? y/N </fg=black;bg=yellow>', false);
        if (! $helper->ask($input, $output, $question)) {
            return;
        }

        $purger = new ORMPurger();
        $executor = new ORMExecutor($this->getEntityManager(), $purger);
        $executor->execute($loader->getFixtures());

        $output->writeln([
            '<info>Succesfully loaded userdata</info>',
        ]);
    }

    protected function getEntityManager()
    {
        if (! $this->em) {
            $this->em = $this->getApplication()
                ->getHelperSet()
                ->get('em')
                ->getEntityManager();
        }

        return $this->em;
    }

    public function setEntityManager($em)
    {
        $this->em = $em;
    }

} 
