<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8319790c0c6f8f1f624a76354cdd21716a76f9878980b2c8d2ed3dc6a72fbd7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03ea2f3649d9548f7051580f1f0750099ecd1abd986aa5b4af43234fd173f6c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ea2f3649d9548f7051580f1f0750099ecd1abd986aa5b4af43234fd173f6c5->enter($__internal_03ea2f3649d9548f7051580f1f0750099ecd1abd986aa5b4af43234fd173f6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cf2189c6ac718417641d1b5f142a9f76cf33b58693080e69ff9a83416a949ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2189c6ac718417641d1b5f142a9f76cf33b58693080e69ff9a83416a949ea4->enter($__internal_cf2189c6ac718417641d1b5f142a9f76cf33b58693080e69ff9a83416a949ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03ea2f3649d9548f7051580f1f0750099ecd1abd986aa5b4af43234fd173f6c5->leave($__internal_03ea2f3649d9548f7051580f1f0750099ecd1abd986aa5b4af43234fd173f6c5_prof);

        
        $__internal_cf2189c6ac718417641d1b5f142a9f76cf33b58693080e69ff9a83416a949ea4->leave($__internal_cf2189c6ac718417641d1b5f142a9f76cf33b58693080e69ff9a83416a949ea4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e478e2eac1b2870189d67b6c8627e5905620b457e7c9347b4504c381f48beae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e478e2eac1b2870189d67b6c8627e5905620b457e7c9347b4504c381f48beae6->enter($__internal_e478e2eac1b2870189d67b6c8627e5905620b457e7c9347b4504c381f48beae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57a0cc59eda4baf6d9d4b6259f5abad4ff91abe3405f3ce1220dbf654edb7353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a0cc59eda4baf6d9d4b6259f5abad4ff91abe3405f3ce1220dbf654edb7353->enter($__internal_57a0cc59eda4baf6d9d4b6259f5abad4ff91abe3405f3ce1220dbf654edb7353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_57a0cc59eda4baf6d9d4b6259f5abad4ff91abe3405f3ce1220dbf654edb7353->leave($__internal_57a0cc59eda4baf6d9d4b6259f5abad4ff91abe3405f3ce1220dbf654edb7353_prof);

        
        $__internal_e478e2eac1b2870189d67b6c8627e5905620b457e7c9347b4504c381f48beae6->leave($__internal_e478e2eac1b2870189d67b6c8627e5905620b457e7c9347b4504c381f48beae6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fbb90e5dc6e870eff4eb7f287b5854f89fd768e7240fec2b5af445d6d4a4981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbb90e5dc6e870eff4eb7f287b5854f89fd768e7240fec2b5af445d6d4a4981->enter($__internal_9fbb90e5dc6e870eff4eb7f287b5854f89fd768e7240fec2b5af445d6d4a4981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d47ff84db7e53a26437e18a35677038744d602d6d7bd2511c15eec0a7352c69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47ff84db7e53a26437e18a35677038744d602d6d7bd2511c15eec0a7352c69c->enter($__internal_d47ff84db7e53a26437e18a35677038744d602d6d7bd2511c15eec0a7352c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d47ff84db7e53a26437e18a35677038744d602d6d7bd2511c15eec0a7352c69c->leave($__internal_d47ff84db7e53a26437e18a35677038744d602d6d7bd2511c15eec0a7352c69c_prof);

        
        $__internal_9fbb90e5dc6e870eff4eb7f287b5854f89fd768e7240fec2b5af445d6d4a4981->leave($__internal_9fbb90e5dc6e870eff4eb7f287b5854f89fd768e7240fec2b5af445d6d4a4981_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cf85ed12e5d677a6abadf8edb016216a7c7b8154a3a4a113cc37627844db625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf85ed12e5d677a6abadf8edb016216a7c7b8154a3a4a113cc37627844db625->enter($__internal_7cf85ed12e5d677a6abadf8edb016216a7c7b8154a3a4a113cc37627844db625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fb5a1aef2623d68854e7d3386b903319594a306e9e0069c66037e222fd3f5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb5a1aef2623d68854e7d3386b903319594a306e9e0069c66037e222fd3f5f2->enter($__internal_2fb5a1aef2623d68854e7d3386b903319594a306e9e0069c66037e222fd3f5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2fb5a1aef2623d68854e7d3386b903319594a306e9e0069c66037e222fd3f5f2->leave($__internal_2fb5a1aef2623d68854e7d3386b903319594a306e9e0069c66037e222fd3f5f2_prof);

        
        $__internal_7cf85ed12e5d677a6abadf8edb016216a7c7b8154a3a4a113cc37627844db625->leave($__internal_7cf85ed12e5d677a6abadf8edb016216a7c7b8154a3a4a113cc37627844db625_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/rb.co/test_task/gamedev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
