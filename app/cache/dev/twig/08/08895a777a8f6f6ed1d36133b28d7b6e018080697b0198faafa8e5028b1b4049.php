<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_168043174fd8ad89cdf96bee80c890270372e54283f5a1571d598bf2769b3491 extends Twig_Template
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
        $__internal_d0bebb9f115a103bf7335f3ffc68d16adfa4545798dc31fc1053900d51444421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bebb9f115a103bf7335f3ffc68d16adfa4545798dc31fc1053900d51444421->enter($__internal_d0bebb9f115a103bf7335f3ffc68d16adfa4545798dc31fc1053900d51444421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));
=======
        $__internal_6c05ab78b3002ac72c1c532043318f590080b3ad98471f610440ffba3848df54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c05ab78b3002ac72c1c532043318f590080b3ad98471f610440ffba3848df54->enter($__internal_6c05ab78b3002ac72c1c532043318f590080b3ad98471f610440ffba3848df54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
<<<<<<< HEAD
        $__internal_d0bebb9f115a103bf7335f3ffc68d16adfa4545798dc31fc1053900d51444421->leave($__internal_d0bebb9f115a103bf7335f3ffc68d16adfa4545798dc31fc1053900d51444421_prof);
=======
        $__internal_6c05ab78b3002ac72c1c532043318f590080b3ad98471f610440ffba3848df54->leave($__internal_6c05ab78b3002ac72c1c532043318f590080b3ad98471f610440ffba3848df54_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}