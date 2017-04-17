<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;

class BuilderNotConnected
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', array(
            'navbar' => true,
        ));

        $menu->addChild('Homepage', array(
            'icon' => 'home',
            'route' => 'homepage',
        ));

        $menu->addChild('The project', array('route' => 'the_project'));
        $menu->addChild('A free project', array('route' => 'free_project'));
        $menu->addChild('Contact', array('route' => 'contact', 'pull-right' => true));

        return $menu;
    }
}
