<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_20b544bb107c771f4d4a840c45067bd02011fac21e9a0efeb6e745325338ec89 extends Twig_Template
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
        $__internal_21612847aef5f629c88a437f541d75a1dcc75f127a8c329a283fec776a528525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21612847aef5f629c88a437f541d75a1dcc75f127a8c329a283fec776a528525->enter($__internal_21612847aef5f629c88a437f541d75a1dcc75f127a8c329a283fec776a528525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));
=======
        $__internal_fd27402d0afa2340333bb5eb4d4879e7e44b01ae711b98a60ca79cde40711fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd27402d0afa2340333bb5eb4d4879e7e44b01ae711b98a60ca79cde40711fe6->enter($__internal_fd27402d0afa2340333bb5eb4d4879e7e44b01ae711b98a60ca79cde40711fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_21612847aef5f629c88a437f541d75a1dcc75f127a8c329a283fec776a528525->leave($__internal_21612847aef5f629c88a437f541d75a1dcc75f127a8c329a283fec776a528525_prof);
=======
        $__internal_fd27402d0afa2340333bb5eb4d4879e7e44b01ae711b98a60ca79cde40711fe6->leave($__internal_fd27402d0afa2340333bb5eb4d4879e7e44b01ae711b98a60ca79cde40711fe6_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
