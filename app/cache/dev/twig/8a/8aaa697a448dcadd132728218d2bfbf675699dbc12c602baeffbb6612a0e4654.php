<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_f03840b339519a0ba9ebba1afab2e1b63c77639805690e62156bd0816fb96752 extends Twig_Template
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
        $__internal_ee94e773ae45f9fb6326b99949e60f25222f2d807cb70b1f844d359a1fe9d64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee94e773ae45f9fb6326b99949e60f25222f2d807cb70b1f844d359a1fe9d64a->enter($__internal_ee94e773ae45f9fb6326b99949e60f25222f2d807cb70b1f844d359a1fe9d64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));
=======
        $__internal_bafcb81e5f4ce230bff84e7079d0eca3296843fb377376729a394224de0737c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafcb81e5f4ce230bff84e7079d0eca3296843fb377376729a394224de0737c4->enter($__internal_bafcb81e5f4ce230bff84e7079d0eca3296843fb377376729a394224de0737c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_ee94e773ae45f9fb6326b99949e60f25222f2d807cb70b1f844d359a1fe9d64a->leave($__internal_ee94e773ae45f9fb6326b99949e60f25222f2d807cb70b1f844d359a1fe9d64a_prof);
=======
        $__internal_bafcb81e5f4ce230bff84e7079d0eca3296843fb377376729a394224de0737c4->leave($__internal_bafcb81e5f4ce230bff84e7079d0eca3296843fb377376729a394224de0737c4_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}