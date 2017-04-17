<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;

/**
 * An example howto inject a default KnpMenu to the Navbar
 * see also Resources/config/example_menu.yml
 * and example_navbar.yml
 * @author phiamo
 *
 */
class BuilderConnected
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', array(
            'navbar' => true,
        ));

        $menu->addChild('Homepage', array(
            'icon' => 'home',
            'route' => 'homepage'));

        return $menu;
    }
}
