<?php
namespace Ibnab\Bundle\ExtensionFieldBundle\Form\Type;
use Oro\Bundle\FormBundle\Form\Type\Select2ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
class CustomerTypeSelectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults(
            [
                'choices' => ['buyer' => 'Buyer' , 'seller' => 'Seller' ],
                'label' => 'oro.customer.customeruser.type.label'
            ]
        );
    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return Select2ChoiceType::class;
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ibnab_extensionfield_select';
    }
}
