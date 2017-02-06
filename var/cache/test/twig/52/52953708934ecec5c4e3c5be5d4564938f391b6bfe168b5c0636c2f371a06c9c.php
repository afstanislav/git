<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1e68800f33bcf53f4b59276e47c5af32fd3dfbaae294d62e32fd1b0fb46b5f11 extends Twig_Template
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
        $__internal_342ec362094da382ff89966dff0aba69ccab365049fa611ebe756e6563e25b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342ec362094da382ff89966dff0aba69ccab365049fa611ebe756e6563e25b60->enter($__internal_342ec362094da382ff89966dff0aba69ccab365049fa611ebe756e6563e25b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_5d5d90615749005f5d3bc1eebf6dc39da135c678dd004fbeb1664086fda1fe76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5d90615749005f5d3bc1eebf6dc39da135c678dd004fbeb1664086fda1fe76->enter($__internal_5d5d90615749005f5d3bc1eebf6dc39da135c678dd004fbeb1664086fda1fe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_342ec362094da382ff89966dff0aba69ccab365049fa611ebe756e6563e25b60->leave($__internal_342ec362094da382ff89966dff0aba69ccab365049fa611ebe756e6563e25b60_prof);

        
        $__internal_5d5d90615749005f5d3bc1eebf6dc39da135c678dd004fbeb1664086fda1fe76->leave($__internal_5d5d90615749005f5d3bc1eebf6dc39da135c678dd004fbeb1664086fda1fe76_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/rb.co/test_task/gamedev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
