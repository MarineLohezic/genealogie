<?php

/* TwigBundle:Exception:exception.xml.twig */
class __TwigTemplate_70e83b95d95dfc1f14291c39c740310475543680b7f6a0ff1afa9c5496ea4783 extends Twig_Template
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
        $__internal_14af7881c1b447b45c9b380dc6e9a0c280b356d9c6d736652498298fcf7dea46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14af7881c1b447b45c9b380dc6e9a0c280b356d9c6d736652498298fcf7dea46->enter($__internal_14af7881c1b447b45c9b380dc6e9a0c280b356d9c6d736652498298fcf7dea46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.xml.twig"));
=======
        $__internal_b25f8ceef243c95b8f8ad8ce9c7d9154199ae90a2b79470f74a368a522d4d270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25f8ceef243c95b8f8ad8ce9c7d9154199ae90a2b79470f74a368a522d4d270->enter($__internal_b25f8ceef243c95b8f8ad8ce9c7d9154199ae90a2b79470f74a368a522d4d270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.xml.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "class", array()), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "message", array()), "html", null, true);
            echo "\">
";
            // line 6
            $this->loadTemplate("@Twig/Exception/traces.xml.twig", "TwigBundle:Exception:exception.xml.twig", 6)->display(array("exception" => $context["e"]));
            // line 7
            echo "    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</error>
";
        
<<<<<<< HEAD
        $__internal_14af7881c1b447b45c9b380dc6e9a0c280b356d9c6d736652498298fcf7dea46->leave($__internal_14af7881c1b447b45c9b380dc6e9a0c280b356d9c6d736652498298fcf7dea46_prof);
=======
        $__internal_b25f8ceef243c95b8f8ad8ce9c7d9154199ae90a2b79470f74a368a522d4d270->leave($__internal_b25f8ceef243c95b8f8ad8ce9c7d9154199ae90a2b79470f74a368a522d4d270_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  47 => 7,  45 => 6,  38 => 5,  34 => 4,  28 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\">
{% for e in exception.toarray %}
    <exception class=\"{{ e.class }}\" message=\"{{ e.message }}\">
{% include '@Twig/Exception/traces.xml.twig' with { 'exception': e } only %}
    </exception>
{% endfor %}
</error>
", "TwigBundle:Exception:exception.xml.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.xml.twig");
    }
}
