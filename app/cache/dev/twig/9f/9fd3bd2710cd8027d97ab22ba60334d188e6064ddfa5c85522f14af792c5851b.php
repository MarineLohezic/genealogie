<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_5e528391e06a04ab0cf62dc500c23a420be2d0984cf304a9a1213938249db752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_c6d1c1074cd22a6df066606f6359538b0a03dec9ba3bc1f323304fcc700ffd47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d1c1074cd22a6df066606f6359538b0a03dec9ba3bc1f323304fcc700ffd47->enter($__internal_c6d1c1074cd22a6df066606f6359538b0a03dec9ba3bc1f323304fcc700ffd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));
=======
        $__internal_c449e9a0c50cf2cac0e982fc4fa91bd5c9b2d91800425a179b1cbb2cbaee0d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c449e9a0c50cf2cac0e982fc4fa91bd5c9b2d91800425a179b1cbb2cbaee0d08->enter($__internal_c449e9a0c50cf2cac0e982fc4fa91bd5c9b2d91800425a179b1cbb2cbaee0d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
<<<<<<< HEAD
        $__internal_c6d1c1074cd22a6df066606f6359538b0a03dec9ba3bc1f323304fcc700ffd47->leave($__internal_c6d1c1074cd22a6df066606f6359538b0a03dec9ba3bc1f323304fcc700ffd47_prof);
=======
        $__internal_c449e9a0c50cf2cac0e982fc4fa91bd5c9b2d91800425a179b1cbb2cbaee0d08->leave($__internal_c449e9a0c50cf2cac0e982fc4fa91bd5c9b2d91800425a179b1cbb2cbaee0d08_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}