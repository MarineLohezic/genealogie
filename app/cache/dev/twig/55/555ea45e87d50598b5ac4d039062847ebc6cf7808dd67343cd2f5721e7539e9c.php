<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3de4f35e14f167a21bf4fe5913cf5e680c9b3c933b3793f96413f597102ee6d1 extends Twig_Template
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
        $__internal_20fba0c5f3bd3f19de1905d8364ebb1bc6444419362e8d2345c4be8d74791e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fba0c5f3bd3f19de1905d8364ebb1bc6444419362e8d2345c4be8d74791e4b->enter($__internal_20fba0c5f3bd3f19de1905d8364ebb1bc6444419362e8d2345c4be8d74791e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));
=======
        $__internal_ecbfe2e4989bac26032d0f7b1dc925fb841f0127eee4b300c53ed70f380a7177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbfe2e4989bac26032d0f7b1dc925fb841f0127eee4b300c53ed70f380a7177->enter($__internal_ecbfe2e4989bac26032d0f7b1dc925fb841f0127eee4b300c53ed70f380a7177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
<<<<<<< HEAD
        $__internal_20fba0c5f3bd3f19de1905d8364ebb1bc6444419362e8d2345c4be8d74791e4b->leave($__internal_20fba0c5f3bd3f19de1905d8364ebb1bc6444419362e8d2345c4be8d74791e4b_prof);
=======
        $__internal_ecbfe2e4989bac26032d0f7b1dc925fb841f0127eee4b300c53ed70f380a7177->leave($__internal_ecbfe2e4989bac26032d0f7b1dc925fb841f0127eee4b300c53ed70f380a7177_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}