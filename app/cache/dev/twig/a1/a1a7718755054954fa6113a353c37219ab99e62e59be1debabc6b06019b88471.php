<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f815b8d3f35cd60b6537a29c61d8edee6f12151ff1bdd4944e27c350ba7efb99 extends Twig_Template
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
        $__internal_53764d288b1ea55747030a55b61e43a503af9d8dd33d89fd0c28ddbdab745c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53764d288b1ea55747030a55b61e43a503af9d8dd33d89fd0c28ddbdab745c77->enter($__internal_53764d288b1ea55747030a55b61e43a503af9d8dd33d89fd0c28ddbdab745c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));
=======
        $__internal_70037024bfa01832451d214edd14049d4f35ad7e6f57a37572704f91a6be7bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70037024bfa01832451d214edd14049d4f35ad7e6f57a37572704f91a6be7bab->enter($__internal_70037024bfa01832451d214edd14049d4f35ad7e6f57a37572704f91a6be7bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
<<<<<<< HEAD
        $__internal_53764d288b1ea55747030a55b61e43a503af9d8dd33d89fd0c28ddbdab745c77->leave($__internal_53764d288b1ea55747030a55b61e43a503af9d8dd33d89fd0c28ddbdab745c77_prof);
=======
        $__internal_70037024bfa01832451d214edd14049d4f35ad7e6f57a37572704f91a6be7bab->leave($__internal_70037024bfa01832451d214edd14049d4f35ad7e6f57a37572704f91a6be7bab_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}