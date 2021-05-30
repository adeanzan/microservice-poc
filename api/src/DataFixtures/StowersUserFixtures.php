<?php


namespace App\DataFixtures;


use App\Entity\StowersUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StowersUserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        foreach ($this->getData() as $raw) {
            $user = new StowersUser();
            $user->setUsername($raw['username']);

            $user->setFirstName($raw['firstName'] ?? null);
            $user->setLastName($raw['lastName'] ?? null);

            $manager->persist($user);
            $this->setReference(StowersUser::class . '.' . $raw['username'], $user);
        }

        $manager->flush();
    }

    public function getData(): array
    {
        return [
            [
                'username' => 'test1',
                'firstName' => 'Basic',
                'lastName' => 'Testuser',
            ],
            [
                'username' => 'test2',
                'firstName' => 'Basic2',
                'lastName' => 'Testuser',
            ],
            [
                'username' => 'test3',
                'firstName' => 'Basic3',
                'lastName' => 'Testuser',
            ],
        ];
    }
}