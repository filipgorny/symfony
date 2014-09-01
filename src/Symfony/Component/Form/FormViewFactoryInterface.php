<?php

namespace Symfony\Component\Form;

/**
 * Interface FormViewFactoryInterface
 *
 * @author Filip Gorny <filip.gorny@gmail.com>
 */
interface FormViewFactoryInterface
{
    /**
     * Creates a view.
     *
     * @param FormView $parent The parent view
     *
     * @return FormView The view
     */
    public function createView(FormView $parent = null);
}