<?php

namespace Sistema\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nambre')
            ->add('apellido')
            ->add('email', 'email')
            ->add('password', 'repeated', array(
                'type'           => 'password',
                'invalid_message'=> 'Las dos contrasenias',
                'options'=> array ('label'=> 'contrasenia')
            ))
            ->add('registrarme', 'submit', array (
                'label'=> 'Registrarme',
       ))
//            ->add('salt')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\UserBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_userbundle_usuario';
    }
}
