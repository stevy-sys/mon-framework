<?php

require __DIR__ . '/vendor/autoload.php';

use App\Providers\AppProviders;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


$application = new Application();

$application->register('make:model')
    ->setDescription('Create a new model')
    ->addArgument('name', InputArgument::REQUIRED, 'Name of the model')
    ->setCode(function (InputInterface $input, OutputInterface $output) {
        
        $modelName = $input->getArgument('name');
        // Logique pour créer le fichier du modèle ici
        $modelContent = <<<EOD
        <?php
        namespace App\Models;

        use Core\Model\Model;

        class $modelName extends Model
        {
            protected \$table = "$modelName"; 
            
            //insert all propertie column here in protected
        }
        EOD;

        file_put_contents("app" . DIRECTORY_SEPARATOR . "Models" . DIRECTORY_SEPARATOR . "$modelName.php", $modelContent);

        // Logique pour créer le fichier du migration ici
        $migrationContent = <<<EOD
        <?php

        use Core\Database\Migrations;
        
        class Migration_create_$modelName extends Migrations
        {
            public static function up() {
                \$sql = "
                    //insert your sql here
                ";
                self::executeSql(\$sql);
            }
            
            public static function down() {
                \$sql = "DROP TABLE IF EXISTS $modelName";
                self::executeSql(\$sql);
            } 
        }
        EOD;

        file_put_contents("app" . DIRECTORY_SEPARATOR . "Migrations" . DIRECTORY_SEPARATOR . "Migration_create_$modelName.php", $migrationContent);

        $output->writeln("Model $modelName created successfully with migrations.");
    });

$application->register('make:controller')
    ->setDescription('Create a new controller')
    ->addArgument('name', InputArgument::REQUIRED, 'Name of the controller')
    ->setCode(function (InputInterface $input, OutputInterface $output) {
        $controllerName = $input->getArgument('name');
        // Logique pour créer le fichier du contrôleur ici
        $controllerContent = <<<EOD
        <?php
        namespace App\Controllers;
        use Core\Controller\Controller;
        
        class $controllerName extends Controller
        {
            // insert your méthodes of contrôleur
        }
        EOD;

        file_put_contents("app" . DIRECTORY_SEPARATOR . "Controllers" . DIRECTORY_SEPARATOR . "$controllerName.php", $controllerContent);

        $output->writeln("Controller $controllerName created successfully.");
    });

$application->register('migrate')
    ->setDescription('Run database migrations')
    ->addOption('direction', null, InputOption::VALUE_REQUIRED, 'Migration direction (up or down)', 'up')
    ->setCode(function (InputInterface $input, OutputInterface $output) {
        AppProviders::execute();
        $direction = $input->getOption('direction');

        if ($direction === 'up' || $direction === 'down') {
            $output->writeln("Running database migrations ($direction)...");

            $migrationsDirectory = __DIR__ . '/app/Migrations';

            // Ouvrez le répertoire des migrations
            $migrationFiles = scandir($migrationsDirectory);

            // Parcourez chaque fichier de migration
            foreach ($migrationFiles as $migrationFile) {
                if ($migrationFile !== '.' && $migrationFile !== '..' && pathinfo($migrationFile, PATHINFO_EXTENSION) === 'php') {
                    $className = pathinfo($migrationFile, PATHINFO_FILENAME);

                    // Incluez le fichier de migration
                    require_once $migrationsDirectory . DIRECTORY_SEPARATOR . $migrationFile;

                    // Vérifiez si la classe de migration a une méthode statique "up" ou "down"
                    if (class_exists($className) && method_exists($className, $direction)) {
                        // Exécutez la méthode statique "up" ou "down" de la classe de migration
                        $className::$direction();
                        //$output->writeln("Migration $className executed $direction successfully.");
                    } else {
                        $output->writeln("Migration $className does not have a '$direction' method.");
                    }
                }
            }

            $output->writeln("Migrations executed $direction successfully.");
        } else {
            $output->writeln("Invalid migration direction. Use 'up' or 'down'.");
        }
    });



$application->run();
