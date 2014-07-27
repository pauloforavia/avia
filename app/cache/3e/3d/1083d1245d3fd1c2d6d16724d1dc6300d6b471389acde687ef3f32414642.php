<?php

/* ITSAtlasBundle:Default:array.html.twig */
class __TwigTemplate_3e3d1083d1245d3fd1c2d6d16724d1dc6300d6b471389acde687ef3f32414642 extends Twig_Template
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
        if (isset($context["final_array"])) { $_final_array_ = $context["final_array"]; } else { $_final_array_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_final_array_);
        foreach ($context['_seq'] as $context["_key"] => $context["info_array"]) {
            // line 2
            echo "    ";
            if (isset($context["info_array"])) { $_info_array_ = $context["info_array"]; } else { $_info_array_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_info_array_);
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 3
                echo "        ";
                if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                echo twig_escape_filter($this->env, $_info_, "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 5
            echo "    <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info_array'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("mainpage");
        echo "\"><input type=\"button\" value=\"На главную\"></a>";
    }

    public function getTemplateName()
    {
        return "ITSAtlasBundle:Default:array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  40 => 5,  30 => 3,  24 => 2,  19 => 1,);
    }
}
