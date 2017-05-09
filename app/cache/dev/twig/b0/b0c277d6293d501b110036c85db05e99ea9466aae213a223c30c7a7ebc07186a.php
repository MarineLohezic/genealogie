<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5775847a9d64f4ee719e5c218ece399875ce61ceadc4e3cc66a0d64dad4426b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_dacc8371779c2252e81d42cbfd0ed993cd7a8a44b825b3ff94426d958e14bd8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dacc8371779c2252e81d42cbfd0ed993cd7a8a44b825b3ff94426d958e14bd8d->enter($__internal_dacc8371779c2252e81d42cbfd0ed993cd7a8a44b825b3ff94426d958e14bd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));
=======
        $__internal_70e9aeb1d99e14aceb6f3b51c9001ced538af3eeb640e491684943dc0e0324b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e9aeb1d99e14aceb6f3b51c9001ced538af3eeb640e491684943dc0e0324b6->enter($__internal_70e9aeb1d99e14aceb6f3b51c9001ced538af3eeb640e491684943dc0e0324b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
<<<<<<< HEAD
        $__internal_dacc8371779c2252e81d42cbfd0ed993cd7a8a44b825b3ff94426d958e14bd8d->leave($__internal_dacc8371779c2252e81d42cbfd0ed993cd7a8a44b825b3ff94426d958e14bd8d_prof);
=======
        $__internal_70e9aeb1d99e14aceb6f3b51c9001ced538af3eeb640e491684943dc0e0324b6->leave($__internal_70e9aeb1d99e14aceb6f3b51c9001ced538af3eeb640e491684943dc0e0324b6_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_0619cbddaec333348605ead57bc8f8fe17b42fca864e7e7930d5778bfa8f8df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0619cbddaec333348605ead57bc8f8fe17b42fca864e7e7930d5778bfa8f8df9->enter($__internal_0619cbddaec333348605ead57bc8f8fe17b42fca864e7e7930d5778bfa8f8df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:info.html.twig"));
=======
        $__internal_9596a3c0154d27f4288c781222c49fceed96daa560bc9b2cd34f5ec01f3e487b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9596a3c0154d27f4288c781222c49fceed96daa560bc9b2cd34f5ec01f3e487b->enter($__internal_9596a3c0154d27f4288c781222c49fceed96daa560bc9b2cd34f5ec01f3e487b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:info.html.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
<<<<<<< HEAD
        $__internal_0619cbddaec333348605ead57bc8f8fe17b42fca864e7e7930d5778bfa8f8df9->leave($__internal_0619cbddaec333348605ead57bc8f8fe17b42fca864e7e7930d5778bfa8f8df9_prof);
=======
        $__internal_9596a3c0154d27f4288c781222c49fceed96daa560bc9b2cd34f5ec01f3e487b->leave($__internal_9596a3c0154d27f4288c781222c49fceed96daa560bc9b2cd34f5ec01f3e487b_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_98b9ec39354c797a018f1e44ea10dc434679e0c1ce9d0cb9805ae75a12cb01c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b9ec39354c797a018f1e44ea10dc434679e0c1ce9d0cb9805ae75a12cb01c5->enter($__internal_98b9ec39354c797a018f1e44ea10dc434679e0c1ce9d0cb9805ae75a12cb01c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:info.html.twig"));
=======
        $__internal_72a0c82c40e5c12ca06f23344ea7a54721959d9733e41b0796ff7fc7cd4040ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a0c82c40e5c12ca06f23344ea7a54721959d9733e41b0796ff7fc7cd4040ca->enter($__internal_72a0c82c40e5c12ca06f23344ea7a54721959d9733e41b0796ff7fc7cd4040ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:info.html.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
<<<<<<< HEAD
        $__internal_98b9ec39354c797a018f1e44ea10dc434679e0c1ce9d0cb9805ae75a12cb01c5->leave($__internal_98b9ec39354c797a018f1e44ea10dc434679e0c1ce9d0cb9805ae75a12cb01c5_prof);
=======
        $__internal_72a0c82c40e5c12ca06f23344ea7a54721959d9733e41b0796ff7fc7cd4040ca->leave($__internal_72a0c82c40e5c12ca06f23344ea7a54721959d9733e41b0796ff7fc7cd4040ca_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  69 => 35,  63 => 34,  52 => 29,  46 => 27,  40 => 26,  33 => 1,  31 => 12,  30 => 11,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
