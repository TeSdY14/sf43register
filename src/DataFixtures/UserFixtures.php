<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserpasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setEmail("Youzeur " . $i . "@bolcoq.com");
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                str_shuffle('Password') . random_int(1, 50)
            ));
            $manager->persist($user);
        }
        $manager->flush();
    }
}
