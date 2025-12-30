<?php

namespace App\Command;

use App\Service\ActivityLogger;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:activities:cleanup',
    description: 'Nettoie les anciennes activités de la base de données',
)]
class CleanupActivitiesCommand extends Command
{
    public function __construct(
        private ActivityLogger $activityLogger
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('days', InputArgument::OPTIONAL, 'Nombre de jours à conserver', 90)
            ->addOption('dry-run', null, InputOption::VALUE_NONE, 'Simuler sans supprimer réellement')
            ->setHelp(<<<'HELP'
La commande <info>%command.name%</info> nettoie les anciennes activités:

  <info>php %command.full_name%</info>

Par défaut, conserve les activités des 90 derniers jours.
Vous pouvez spécifier un nombre de jours différent:

  <info>php %command.full_name% 30</info>

Pour simuler sans supprimer:

  <info>php %command.full_name% --dry-run</info>

ATTENTION: Cette opération est irréversible!
HELP
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $daysToKeep = (int) $input->getArgument('days');
        $dryRun = $input->getOption('dry-run');

        $io->title('🧹 Nettoyage de l\'historique des activités');

        if ($daysToKeep < 1) {
            $io->error('Le nombre de jours doit être supérieur à 0');
            return Command::FAILURE;
        }

        $io->info(sprintf('Suppression des activités de plus de %d jours', $daysToKeep));

        if ($dryRun) {
            $io->warning('MODE SIMULATION - Aucune suppression réelle');
        } else {
            if (!$io->confirm('Êtes-vous sûr de vouloir supprimer ces données ?', false)) {
                $io->warning('Opération annulée');
                return Command::SUCCESS;
            }
        }

        try {
            if (!$dryRun) {
                $deletedCount = $this->activityLogger->cleanup($daysToKeep);
                
                $io->success([
                    sprintf('%d activité(s) supprimée(s) avec succès', $deletedCount),
                    sprintf('Activités conservées: %d derniers jours', $daysToKeep),
                ]);

                $io->note('Pensez à planifier cette commande régulièrement via cron');
            } else {
                $io->info('Simulation terminée. Utilisez sans --dry-run pour supprimer réellement');
            }

            return Command::SUCCESS;

        } catch (\Exception $e) {
            $io->error([
                'Erreur lors du nettoyage',
                $e->getMessage()
            ]);

            return Command::FAILURE;
        }
    }
}
