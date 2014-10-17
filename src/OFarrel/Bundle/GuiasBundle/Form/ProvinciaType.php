<?php

namespace OFarrel\Bundle\GuiasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * ProvinciaType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class ProvinciaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('localidades', 'select2', array(
                'class' => 'OFarrel\Bundle\GuiasBundle\Entity\Localidad',
                'url'   => 'Provincia_autocomplete_localidades',
                'configs' => array(
                    'multiple' => true,//required true or false
                    'width'    => 'off',
                ),
                'attr' => array(
                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OFarrel\Bundle\GuiasBundle\Entity\Provincia'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ofarrel_bundle_guiasbundle_provincia';
    }
}
