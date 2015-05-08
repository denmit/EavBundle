<?php

namespace Opifer\EavBundle\EventListener\Serializer;

use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\ObjectEvent;


/**
 * Class FormEventSubscriber
 *
 * @package  Opifer\EavBundle\EventListener\Serializer
 */
class FormEventSubscriber implements EventSubscriberInterface
{
    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            array('event' => 'serializer.post_serialize', 'method' => 'onPostSerialize'),
        );
    }

    /**
     * @param ObjectEvent $event
     */
    public function onPostSerialize(ObjectEvent $event)
    {
        $object = $event->getObject();
        
        if(property_exists($object, '_form')) {
            $event->getVisitor()->addData('_form', $object->_form);
        }
    }
}
