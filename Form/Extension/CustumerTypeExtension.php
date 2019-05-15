<?php
namespace Ibnab\Bundle\ExtensionFieldBundle\Form\Extension;
use Oro\Bundle\CustomerBundle\Form\Type\CustomerUserType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Ibnab\Bundle\ExtensionFieldBundle\Form\Type\CustomerTypeSelectType;
class CustumerTypeExtension extends AbstractTypeExtension {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('type', CustomerTypeSelectType::class, ['mapped' => false, 'label' => 'oro.customer.customeruser.type.label'])
                ->addEventListener(
                    FormEvents::POST_SUBMIT, function (FormEvent $event) {
                    $customerUser = $event->getData();
                    $type = $event->getForm()->get('type')->getData();
                    $customerUser->setType($type);
                }, 5
                )->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) {
                           if(!is_null($event->getData())){
                               //var_dump($event->getData()->getPmanagerLogs());
                               $event->getForm()->add('type', CustomerTypeSelectType::class, ['mapped' => false,'data' => $event->getData()->getType(),'label' => 'Type']);
                           }
                });
    }
    public function getExtendedType() {
        return CustomerUserType::class;
    }
}
