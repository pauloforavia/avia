<?php

/* ITSAtlasBundle:Default:sample_xml.html.twig */
class __TwigTemplate_96452875520f0ef6ba30304709ad3bc5fe78c8cf0748eabec444ca682fefa55c extends Twig_Template
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
        // line 1
        if (isset($context["tickets"])) { $_tickets_ = $context["tickets"]; } else { $_tickets_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tickets_);
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 2
            echo "    ";
            if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
            echo twig_escape_filter($this->env, $_ticket_, "html", null, true);
            echo " <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("mainpage");
        echo "\"><input type=\"button\" value=\"На главную\"></a>";
    }

    public function getTemplateName()
    {
        return "ITSAtlasBundle:Default:sample_xml.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  24 => 2,  19 => 1,);
    }
}
