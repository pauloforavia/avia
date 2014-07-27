<?php

/* ITSAtlasBundle:Default:index.html.twig */
class __TwigTemplate_39cb6db1f43557a8656d6841a57833c20be9b4f64b68ab0e8713e6b609d75d74 extends Twig_Template
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
        echo "Любой контент.

<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("registration");
        echo "\"><input type=\"button\" value=\"Регистрация\"></a>
<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("array");
        echo "\"><input type=\"button\" value=\"Задача с массивом\"></a>
<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("xml");
        echo "\"><input type=\"button\" value=\"Задача с xml\"></a>";
    }

    public function getTemplateName()
    {
        return "ITSAtlasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
