<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_72cba9226a3266928060a8506a5e25fa11911bba0dc22d069c124d1c334bad14 extends Twig_Template
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
        $__internal_ca9ec75ea342c0c4d822ec5de7673acdcd45b85a3adf01188e68ee2d8c4b54ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9ec75ea342c0c4d822ec5de7673acdcd45b85a3adf01188e68ee2d8c4b54ba->enter($__internal_ca9ec75ea342c0c4d822ec5de7673acdcd45b85a3adf01188e68ee2d8c4b54ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));
=======
        $__internal_cd5ff955262963210754d86c08850ece2afd6f5ae48c58a110ea91ae95854297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5ff955262963210754d86c08850ece2afd6f5ae48c58a110ea91ae95854297->enter($__internal_cd5ff955262963210754d86c08850ece2afd6f5ae48c58a110ea91ae95854297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
<<<<<<< HEAD
        $__internal_ca9ec75ea342c0c4d822ec5de7673acdcd45b85a3adf01188e68ee2d8c4b54ba->leave($__internal_ca9ec75ea342c0c4d822ec5de7673acdcd45b85a3adf01188e68ee2d8c4b54ba_prof);
=======
        $__internal_cd5ff955262963210754d86c08850ece2afd6f5ae48c58a110ea91ae95854297->leave($__internal_cd5ff955262963210754d86c08850ece2afd6f5ae48c58a110ea91ae95854297_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}