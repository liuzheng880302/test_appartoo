<?php

namespace ZHENG\UserBundle\Command;


use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use FOS\UserBundle\Model\User;
use FOS\UserBundle\Command\CreateUserCommand as BaseCommand;

class CreateUserCommand extends BaseCommand
{
    /**
     * @see Command
     */
    protected function configure()
    {
        parent::configure();
        $this
            ->setName('zheng:user:create')
            ->getDefinition()->addArguments(array(
                new InputArgument('prenom', InputArgument::REQUIRED, 'Prénom'),
                new InputArgument('nom', InputArgument::REQUIRED, 'Nom')/*,
                new InputArgument('adresse', InputArgument::REQUIRED, 'Adresse'),
                new InputArgument('telephone', InputArgument::REQUIRED, 'N° Téléphone'),
                new InputArgument('site', InputArgument::REQUIRED, 'Site Web')*/
            ))
        ;
        $this->setHelp(<<<EOT
// L'aide qui va bien
EOT
        );
    }

    /**
     * @see Command
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $username   = $input->getArgument('username');
        $email      = $input->getArgument('email');
        $password   = $input->getArgument('password');

        $prenom  = $input->getArgument('prenom');
        $nom   = $input->getArgument('nom');
        /*
        $adresse   = $input->getArgument('adresse');
        $telephone   = $input->getArgument('telephone');
        $site   = $input->getArgument('site');*/

        $inactive   = $input->getOption('inactive');
        $superadmin = $input->getOption('super-admin');

        /** @var \FOS\UserBundle\Model\UserManager $user_manager */
        $user_manager = $this->getContainer()->get('fos_user.user_manager');

        /** @var \Acme\AcmeUserBundle\Entity\User $user */
        $user = $user_manager->createUser();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPlainPassword($password);

        $user->setPrenom($prenom);
        $user->setNom($nom);
        /*
        $user->setAdresse($adresse);
        $user->setTelephone($telephone);
        $user->setSite($site);*/

        $user->setEnabled((Boolean) !$inactive);
        $user->setSuperAdmin((Boolean) $superadmin);
        $user->setPrenom($prenom);
        $user->setNom($nom);

        $user_manager->updateUser($user);

        $output->writeln(sprintf('Created user <comment>%s</comment>', $username));
    }

    /**
     * @see Command
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        parent::interact($input, $output);
        if (!$input->getArgument('prenom')) {
            $prenom = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Please choose a Prénom:',
                function($prenom) {
                    if (empty($prenom)) {
                        throw new \Exception('Prénom can not be empty');
                    }

                    return $prenom;
                }
            );
            $input->setArgument('prenom', $prenom);
        }
        if (!$input->getArgument('nom')) {
            $nom = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Please choose a Nom:',
                function($nom) {
                    if (empty($nom)) {
                        throw new \Exception('Nom can not be empty');
                    }

                    return $nom;
                }
            );
            $input->setArgument('nom', $nom);
        }
        /*
        if (!$input->getArgument('adresse')) {
            $adresse = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Please choose a Adresse:',
                function($adresse) {
                    if (empty($adresse)) {
                        throw new \Exception('Adresse can not be empty');
                    }

                    return $adresse;
                }
            );
            $input->setArgument('adresse', $adresse);
        }
        if (!$input->getArgument('telephone')) {
            $telephone = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Please choose a Telephone Number:',
                function($telephone) {
                    if (empty($telephone)) {
                        throw new \Exception('Telephone Number can not be empty');
                    }

                    return $telephone;
                }
            );
            $input->setArgument('telephone', $telephone);
        }
        if (!$input->getArgument('site')) {
            $site = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Please choose a Site Web:',
                function($site) {
                    if (empty($site)) {
                        throw new \Exception('Site Web can not be empty');
                    }

                    return $site;
                }
            );
            $input->setArgument('site', $site);
        }
        */

    }

}