<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4b052a7bcbdbc945bd517ea96b113fe5f76eddf1eb917d830d41943878d67502 extends Twig_Template
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
        $__internal_4e1b6282de6b0ea52109a295eb53451f418adf33fa034376ffd5d8437ed9574d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1b6282de6b0ea52109a295eb53451f418adf33fa034376ffd5d8437ed9574d->enter($__internal_4e1b6282de6b0ea52109a295eb53451f418adf33fa034376ffd5d8437ed9574d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));
=======
        $__internal_8377f5f2135208dbaa501de689d349a7d00ce760ce0e82d4ba321ebcf8abd325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8377f5f2135208dbaa501de689d349a7d00ce760ce0e82d4ba321ebcf8abd325->enter($__internal_8377f5f2135208dbaa501de689d349a7d00ce760ce0e82d4ba321ebcf8abd325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
<<<<<<< HEAD
        $__internal_4e1b6282de6b0ea52109a295eb53451f418adf33fa034376ffd5d8437ed9574d->leave($__internal_4e1b6282de6b0ea52109a295eb53451f418adf33fa034376ffd5d8437ed9574d_prof);
=======
        $__internal_8377f5f2135208dbaa501de689d349a7d00ce760ce0e82d4ba321ebcf8abd325->leave($__internal_8377f5f2135208dbaa501de689d349a7d00ce760ce0e82d4ba321ebcf8abd325_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}