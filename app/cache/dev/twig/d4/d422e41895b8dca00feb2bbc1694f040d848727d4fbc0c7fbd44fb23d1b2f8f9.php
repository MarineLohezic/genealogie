<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ccbbee4bd5c2f39ab98db4266920980a39c757162651bd6d813d72dd10bb6174 extends Twig_Template
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
        $__internal_7fcc8cc6a12b546a939091b232179c264a3901941cff033aef57a1fcbe3398d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcc8cc6a12b546a939091b232179c264a3901941cff033aef57a1fcbe3398d1->enter($__internal_7fcc8cc6a12b546a939091b232179c264a3901941cff033aef57a1fcbe3398d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));
=======
        $__internal_373185f0c26b655b705c07899b78ecef24d762642fb4fba6ebd37fccee5a5cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373185f0c26b655b705c07899b78ecef24d762642fb4fba6ebd37fccee5a5cb1->enter($__internal_373185f0c26b655b705c07899b78ecef24d762642fb4fba6ebd37fccee5a5cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
<<<<<<< HEAD
        $__internal_7fcc8cc6a12b546a939091b232179c264a3901941cff033aef57a1fcbe3398d1->leave($__internal_7fcc8cc6a12b546a939091b232179c264a3901941cff033aef57a1fcbe3398d1_prof);
=======
        $__internal_373185f0c26b655b705c07899b78ecef24d762642fb4fba6ebd37fccee5a5cb1->leave($__internal_373185f0c26b655b705c07899b78ecef24d762642fb4fba6ebd37fccee5a5cb1_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}