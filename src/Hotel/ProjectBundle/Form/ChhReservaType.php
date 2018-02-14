<?php

namespace Hotel\ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ChhReservaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreReserva')
            ->add('correoReserva', EmailType::class)
            ->add('empresaReserva')
            ->add('numeroCuartosReserva')
            ->add('mensajeReserva')
            ->add('congresoRelacion')
            ->add('hotelRelacion')
            ->add('save', SubmitType::class, array('label' => 'guardar'))
        ; 
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hotel\ProjectBundle\Entity\ChhReserva'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'Reservas';
    }


}
